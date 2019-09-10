<?php


namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $new_products = Product::withCount('comments')->orderBy('created_at', 'desc')->limit(12)->get();
        // $all_products = Product::withCount('images', 'comments')->limit(16)->get();
        // $best_seller  = Product::withCount('orderDetails', 'comments')->get()->sortByDesc('orderDetails_count')->take(20);
        $products=Product::with('images')->paginate(20);
        $listCategories=Category::where('parent_id', '=', null);

        //dd($products);


        return view('home',compact('products','listCategories'));
    }
}
