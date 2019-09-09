<?php

namespace App\Http\Controllers;
use App\City;
use App\Product;
use App\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     return view('cart');
    // }

    public function showCheckoutForm()
    {
        $cities = City::all();

        if (!Auth::check()) {

            return view('checkout', ['cities' => $cities]);

        } else {
            $user      = Auth::user();
            $addresses = $user->addresses()->with('city', 'district')->get();

            return view('checkout', [
                'cities'    => $cities,
                'addresses' => $addresses,
            ]);
        }
    }

    public function checkout(Request $request)
    {
        DB::beginTransaction();

        if (!Auth::check()) {
            $this->validateGuestRequest($request);

            try {
                $this->guestCheckout($request);

                DB::commit();

                return view('message', [
                    'title'   => 'Đặt hàng thành công',
                    'message' => 'Chúng tôi sẽ xử lý đơn hàng của bạn trong vòng 1 - 2 ngày làm việc. Cảm ơn!',
                    'url'     => '/account',
                    'type'    => 'order success',
                ]);
            } catch (\Exception $e) {
                DB::rollback();
            }
        } else {
            $this->validateUserRequest($request);

            $user = Auth::user();

            if ($request->address_id == $this::NEW_ADDRESS) {
                $this->validateNewAddressUserRequest($request);

                $address = $this->createNewAddress($user, $request->only(['first_name', 'last_name', 'phone', 'address', 'city_id', 'district_id']));
            } else {
                $address = $user->addresses()->where('id', $request->address_id)->first();
            }

            try {
                $this->userCheckout($request, $address);

                DB::commit();

                return view('message', [
                    'title'   => 'Đặt hàng thành công',
                    'message' => 'Chúng tôi sẽ xử lý đơn hàng của bạn trong vòng 1 - 2 ngày làm việc. Cảm ơn!',
                    'url'     => '/account',
                    'type'    => 'order success',
                ]);
            } catch (\Exception $e) {
                DB::rollback();
            }
        }
    }

    public function getCart()
    {
        $cart_contents = \Cart::getContent();
        $total = \Cart::getTotal();
        return view('cart', compact(['cart_contents','total']));
    }

    public function addCart(Request $request, $id,$idsize)
    {
        $product = Product::findOrFail($id);
        $productSize=ProductSize::find($idsize);
        \Cart::add(array('id'=>$product->id,'name'=>$product->name,'price'=>$product->price,'quantity'=>$request->qty,
            'attributes'=>array(
                'img'=>$product->photo(),
                'size' => $productSize->size,
                'idsize' => $idsize,
            )));
        return redirect()->route('cart.index');
    }

    public function updateCart(Request $request)
    {
        if ($request->ajax()){
            $id = $request->id;
            $qty = $request->quantity;
            \Cart::update($id, array('quantity'=>array(
                    'relative' => false,
                    'value' =>$qty,
                    )
            ));
        return 1;
        }
        return 'Fails';
    }

    public function removeCart($id)
    {
        \Cart::remove($id);
        return redirect()->route('cart.index');
    }

    public function orderConfirm()
    {
        if (\auth()->check()){
            $cart_contents = \Cart::getContent();
            $total = \Cart::getTotal();
            $user = \auth()->user();
            return view('orderConfirm', compact(['cart_contents','total','user']));
        }
        return redirect()->route('login');
    }

    public function orderPay(StoreOrderPost $request)
    {
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->order_date = date('y-m-d H:i:s');
        $order->name = $request->name;
        $order->tel = $request->tel;
        $order->address = $request->address;
        $order->total = \Cart::getTotal();
        $order->status_id = 1;
        $order->save();

        $cart_contents = \Cart::getContent();
        foreach ($cart_contents as $cart)
        {
            $order_detail = new Order_Detail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $cart->id;
            $order_detail->quantily = $cart->quantity;
            $order_detail->price = $cart->price;
            $order_detail->total_detail = $cart->price * $cart->quantity;
            $order_detail->save();

            $product = Product::findOrFail($cart->id);
            if ($product->quantily < $cart->quantity)
            {
                $order->delete();
                return redirect()->route('getCart')->with('error', 'Ordering fail. '.$product->name.' not enough quantity !' );
            }
        }
        foreach($cart_contents as $cart){
            $product = Product::findOrFail($cart->id);
            $product->quantily = $product->quantily - $cart->quantity;
            $product->save();
        }
        \Cart::clear();
        return redirect()->route('getCart')->with('success','Đặt hàng thành công!');
    }
}
