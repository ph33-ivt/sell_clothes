<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$status = $request->status;

        if ($status) {

            $orders = Order::where('status', $status)->orderBy('id')->paginate(8);

            return view('admin.orders.status', [
                'status' => $status,
                'orders' => $orders,
            ]);
        } else {

            $numberOfOrders          = Order::count();
            $numberOfPendingOrders   = Order::where('status', 'pending')->count();
            $numberOfApprovedOrders  = Order::where('status', 'approved')->count();
            $numberOfCompleteOrders   = Order::where('status', 'complete')->count();
            $numberOfCancelledOrders  = Order::where('status', 'cancelled')->count();

            return view('admin.dashboard', [
                'numberOfOrders'          => $numberOfOrders,
                'numberOfPendingOrders'   => $numberOfPendingOrders,
                'numberOfApprovedOrders'  => $numberOfApprovedOrders,
                'numberOfCompleteOrders'   => $numberOfCompleteOrders,
                'numberOfCancelledOrders'  => $numberOfCancelledOrders,
            ]);
        }
        // return view('admin.dashboard');
    }
}
