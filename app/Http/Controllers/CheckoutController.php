<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Point;
use App\Models\ReceveurManagement;





class CheckoutController extends Controller
{
    public function index( )
    {
        $payments=Payment::where('user_id',Auth::id())->first();
        $carts=Cart::where('user_id',Auth::id())->get();

        return view('frontend.checkout', compact(['carts','payments']));


    }

    public function valid(Request $request,$id)
    {






$request->validate([
    'fname'=>['required', 'string', 'max:255'],
    'lname'=>['required', 'string', 'max:255'],
    'address'=>['required', 'string', 'max:255'],
    'city'=>['required', 'string', 'max:255'],
    'states'=>['required', 'string', 'max:255'],
    'zip'=>['required', 'string', 'max:5'],
    'cname'=>['required', 'string','min:2' ,'max:255'],
    'cnumber'=>['required', 'string', 'max:16', 'min:16'],
    'mm'=>['required', 'string', 'max:2', 'min:2'],
    'yy'=>['required', 'string', 'max:2', 'min:2'],
    'cvv'=>['required', 'string', 'max:3', 'min:3']




]);



        $users=User::find($id);



        $users->fname=$request->input('fname');
        $users->lname=$request->input('lname');
        $users->address=$request->input('address');
        $users->city=$request->input('city');
        $users->states=$request->input('states');
        $users->zip=$request->input('zip');
        $users->update();





        $payments=new Payment();
        $payments->user_id=$id;
        $payments->cname=$request->input('cname');
        $payments->cnumber=$request->input('cnumber');
        $payments->mm=$request->input('mm');
        $payments->yy=$request->input('yy');
        $payments->cvv=$request->input('cvv');
        $payments->save();



        $total_price=0;
       $carts=Cart::where('user_id',$id)->get();
       foreach ($carts as $item)
       {
        $price=$item->articles->price;
        $qty=$item->prod_qty;
        $total_price+= $price*$qty;
    }

    $orders = Order::create([
        'user_id' => $id,
        'tracknumber' => rand(1111111,999999999),
        'total_price' => $total_price,
    ]);

    foreach ($carts as $item)
    {

        $receveur_management=ReceveurManagement::first();


     $price=$item->articles->price;
     $percentage=$item->articles->percentage;
     $qty=$item->prod_qty;


     $points=$price*$qty/$receveur_management->points_to_dinar;
     $pointst=$points*$percentage/100;

     DB::table('articles')
     ->where('id', $item->articles->id)
     ->decrement('qty',$qty);

    $receveur_id=$item->receveur_id;


    $order_items=new OrderItem();
    $order_items->order_id=$orders->id ;
    $order_items->user_id=$id ;
    $order_items->cart_id=$item->articles->id ;
    $order_items->prod_id=$item->articles->id ;
    $order_items->prod_price=$item->articles->price ;
    $order_items->prod_qty=$item->prod_qty ;
    $order_items->save();





     if(Point::where('user_id',$receveur_id)->exists()){
     DB::table('points')
     ->where('user_id',$receveur_id )
     ->increment('points_count',$pointst);
     DB::table('points')
     ->where('user_id',$receveur_id )
     ->decrement('p',$pointst);

     }

     $item->delete();
 }



        return redirect('/')->with('status5','Your Order Completed Sccessfully');


    }
}
