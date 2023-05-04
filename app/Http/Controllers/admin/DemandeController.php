<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Point;
use Illuminate\Support\Facades\DB;
use App\Models\ReceveurManagement;
use App\Models\PaginateOption;

class DemandeController extends Controller
{
    public function index()
    {
        $paginate_options=PaginateOption::first();
        $users=User::where('state',0)->where('role_as',1)->paginate($paginate_options->n_receveur_admin);
        return view('admin.demande.receveur', compact('users'));
    }
    public function update(Request $request,$id)
    {


        $points=new Point();
        $points->user_id=$request->input('user_id') ;
        $points->save();

        $users=User::find($id);



        $users->state=$request->input('state') ;
        $users->update();

        return redirect()->route('demande')->with('status','Receveur A ete Accepter');
    }

    public function deleter(Request $request,$id)
    {



        $users=User::find($id);



        $users->state=$request->input('state') ;
        $users->role_as=$request->input('state') ;
        $users->update();

        return redirect()->route('demande')->with('status2','Receveur Refused');
    }








    public function indexo()
    {
        $paginate_options=PaginateOption::first();
        $orders=order::where('state',0)->paginate($paginate_options->n_orders_admin	);






        return view('admin.demande.orders', compact('orders'));
    }
    public function viewo($id)
    {
        $orderitems=OrderItem::where('order_id',$id)->get();






        return view('admin.demande.order-view', compact('orderitems'));
    }

    public function updateo(Request $request,$id)
    {



        $orders=Order::find($id);



        $orders->state=$request->input('state') ;
        $orders->update();

        return redirect()->route('demandeo')->with('status','Order Accepted');
    }

    public function indexp()

    {
        $paginate_options=PaginateOption::first();
        $receveur_management=ReceveurManagement::first();

        $points=Point::where('state',1)->paginate($paginate_options->n_payments_admin);
        return view('admin.demande.points', compact(['points','receveur_management']));
    }

    public function updatep(Request $request,$id)
    {



        $points=Point::find($id);




        $points->state=$request->input('state') ;
        $points->total_widthraw+= $points->widthraw;
        $points->widthraw=0;
        $points->update();

        return redirect()->route('demandep')->with('status','Payments Accepted');
    }

    public function deletep(Request $request,$id)
    {



        $points=Point::find($id);




        $points->state=$request->input('state') ;


        DB::table('points')
        ->where('user_id',$points->user_id)
        ->increment('points_count',$points->widthraw);

        $points->widthraw=0;


        $points->update();

        return redirect()->route('demandep')->with('status2','Payments Refused');
    }


}
