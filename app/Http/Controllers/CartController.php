<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\ReceveurManagement;
use App\Models\Percentage;
use App\Models\Point;

class CartController extends Controller
{




    public function index( )
    {

        $cartsc=Cart::where('user_id',Auth::id())->count();
        $carts=Cart::where('user_id',Auth::id())->get();

        return view('frontend.cart.index', compact(['carts','cartsc']));

    }

    public function addtocart(Request $request )
    {

        $product_id=$request->input('product_id');
        $product_qty=$request->input('product_qty');



        $prod_check=Article::where('id',$product_id)->first();

    if(Auth::check()){
        if(Auth::user()->role_as==2){

return response()->json(['status'=>"You Can't Buy This Item"]);
        }
        else{

        if($prod_check)
        {

            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                return response()->json(['status'=>$prod_check->name. " Already Added To Cart"]);
            }
            elseif($prod_check->qty<$product_qty)
            {
                return response()->json(['status'=>$prod_check->name. " Stock is insufficient "]);
            }



             else {




            $cartItem=new cart();
            $cartItem->prod_id=$product_id;


            $cartItem->user_id=Auth::id();

            $cartItem->prod_qty=$product_qty;
            $cartItem->save();





            return response()->json(['status'=>$prod_check->name. " Added To Cart"]);
                   }

        }

    }
}
    else
           {
            return response()->json(['status'=> "Login First"]);
           }
    }




    public function addtocartr(Request $request )
    {

        $product_id=$request->input('product_id');
        $product_price=$request->input('product_price');
        $product_qty=$request->input('product_qty');
        $receveur_id=$request->input('receveur_id');
        $percentage=$request->input('percentage');





        $receveur_management=ReceveurManagement::first();




        $points=($product_price*$product_qty)/$receveur_management->points_to_dinar;
        $pointst=$points*$percentage/100;






        $prod_check=Article::where('id',$product_id)->first();

    if(Auth::check()){
        if(Auth::user()->role_as==2){

return response()->json(['status'=>"You Can't Buy This Item"]);
        }
        else{

        if($prod_check)

        {

            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                return response()->json(['status'=>$prod_check->name. " Already Added To Cart"]);
            }

            elseif($prod_check->qty<$product_qty)
            {
                return response()->json(['status'=>$prod_check->name. " Stock is insufficient "]);
            }


             else {





            $cartItem=new cart();
            $cartItem->prod_id=$product_id;
            $cartItem->receveur_id=$receveur_id;

            $cartItem->user_id=Auth::id();

            $cartItem->prod_qty=$product_qty;
            $cartItem->save();





            //if(Auth::user()->id!=$receveur_id)
            //{
            if(Point::where('user_id',$receveur_id)->exists()){
                DB::table('points')
            ->where('user_id', $receveur_id)
            ->increment('p',$pointst );

            //}

            }



            return response()->json(['status'=>$prod_check->name. " Added To Cart"]);
                   }

        }

    }
}
    else
           {
            return response()->json(['status'=> "Login First"]);
           }
    }

    public function deleteprod(Request $request )
    {


    if(Auth::check()){

        $receveur_id=$request->input('receveur_id');
        $prod_id=$request->input('prod_id');
        $prod_qty=$request->input('prod_qty');
        $percentage=$request->input('percentage');
        $price=$request->input('price');






        $receveur_management=ReceveurManagement::first();

        $points=$price*$prod_qty/$receveur_management->points_to_dinar;
        $pointst=$points*$percentage/100;



        if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()){
            $cartItem=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();

            DB::table('articles')
            ->where('id', $prod_id)
            ->increment('qty',$cartItem->prod_qty);

            $cartItem->delete();

            if(Point::where('user_id',$receveur_id)->exists()){
                DB::table('points')
            ->where('user_id', $receveur_id)
            ->decrement('p',$pointst);

            }


        }
    }

    else{
        return response()->json(['status'=> "Login To Continue"]);
    }



    }


    public function loadcart()
    {

    $cartcount=Cart::where('user_id',Auth::id())->count();
    return response()->json(['count'=> $cartcount]);
    }


}


