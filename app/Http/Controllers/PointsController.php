<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Point;
use App\Models\ReceveurManagement;
use App\Models\PaginateOption;
use Illuminate\Support\Facades\DB;

class PointsController extends Controller
{
    public function widthraw(Request $request,$id)
    {


        $receveur_management=ReceveurManagement::first();

        $points=Point::where('user_id',$id)->first();

        if($points->state== 1){
            return back()->with('status2','Already Submit a Demande');
        }

        else{

            $request->validate([
                'paypal_email' => ['required', 'string', 'email', 'max:255'],


            ]);

        $points->state=$request->input('state') ;
        $points->paypal_email=$request->input('paypal_email') ;

        $points->widthraw=$request->input('widthraw') ;
        $widthraw=$request->input('widthraw') ;
        if($widthraw< $receveur_management->minimum_amount){
            return back()->with('status2','Minimum Withdrawal Amount = '.$receveur_management->minimum_amount.' Points');
        }
        elseif($widthraw <= $points->points_count)
        {

            DB::table('points')
            ->where('user_id', $id)
            ->decrement('points_count', $widthraw);
        $points->update();

        return back()->with('status','Votre Demande a été bien enregistré ');
    }
    else{
        return back()->with('status2','You Dont Have This Points');
    }
}
    }
}
