<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ReceveurManagement;
use App\Models\Percentage;


class ProfileController extends Controller
{
    public function index($id)
    {
        if(Point::where('user_id',$id)->exists()){
        $points=Point::where('user_id',$id)->first();
        $receveur_management=ReceveurManagement::first();
        return view('receveur.profile',compact(['receveur_management','points']) );
    }
    else
    if(Auth::user())
    {
        return view('receveur.profile');

    }
    else{
        return redirect('/');
    }
    }
    public function ereceveur($id)
    {

        $users=User::find($id);
        return view('receveur.inscreption', compact('users'));
    }
    public function ureceveur(Request $request,$id)
    {


        $users=User::find($id);
        $users->role_as=$request->input('role_as') ;
        $users->update();

        return redirect('/')->with('status5','Votre Demande a été bien enregistré   ');
    }


    public function eindex()
    {


        return view('receveur.editprofile');
    }


    public function valid(Request $request,$id)
    {



        $users=User::find($id);
        $users->email=$request->input('email');
        $users->username=$request->input('username');
        $users->fname=$request->input('fname');
        $users->lname=$request->input('lname');
        $users->address=$request->input('address');
        $users->city=$request->input('city');
        $users->states=$request->input('states');
        $users->zip=$request->input('zip');
        $users->update();







        return back()->with('status','Profile Updated Sccessfully');
}




}
