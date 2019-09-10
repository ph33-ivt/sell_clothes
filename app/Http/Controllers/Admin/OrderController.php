<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderInfo;
use App\User;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::with('orderInfo')->paginate(15);
        dd($orders);
        //dd($orderInfo);

        return view('admin.orders.index', compact('orders'));
    }
    public function destroy($id)
    {
    	$order = Order::find($id);
        $OrderDetail=OrderDetail::where('order_id',$id)->delete();
        $order->delete();
        Session::flash('success','Xóa thành công!');
        return redirect()->back();
    }
    public function detail($id)
    {
    	$orders = Order::with('orderInfo')->paginate(15);
    	
    	$order = Order::find($id);
        return view('admin.orders.detail', compact('order','orders'));
    }
}
