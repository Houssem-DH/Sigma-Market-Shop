<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index($id )
    {

        if(Auth::user()->role_as!=2)
        {
        $orders=Order::where('user_id',$id)->get();



                return view('frontend.orders', compact('orders'));

            }
            else{
                return redirect('/');
            }


    }
    public function view($id )
    {

        if(Auth::user()->role_as!=2)
        {
        $orderitems=OrderItem::where('order_id',$id)->get();



                return view('frontend.view-order', compact('orderitems'));

            }
            else{
                return redirect('/');
            }


    }
}
