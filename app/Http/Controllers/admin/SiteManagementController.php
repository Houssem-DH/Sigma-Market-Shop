<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReceveurManagement;
use App\Models\PaginateOption;
use App\Models\SlideImage;
use Illuminate\Support\Facades\File;


use Illuminate\Support\Facades\DB;


class SiteManagementController extends Controller
{
    public function receveurm()
    {


        $receveur_management=ReceveurManagement::first();



        return view('admin.sitemanagement.receveur-management',compact('receveur_management') );
    }

    public function rmupdate1(Request $request)
    {



        $receveur_link_management=ReceveurManagement::first();

        $request->validate([
            'time' => ['required'],
            'points_on_visite' => ['required']
        ]);

        $receveur_link_management->time=$request->input('time');
        $receveur_link_management->points_on_visite=$request->input('points_on_visite');
        $receveur_link_management->update();
        return redirect()->route('receveur-management')->with('status','Receveur Link Settings Updated Successfully');

    }
    public function rmupdate2(Request $request)
    {


        $widthraw_options=ReceveurManagement::first();

        $request->validate([
            'minimum_amount' => ['required'],
            'points_to_dinar' => ['required']
        ]);

        $widthraw_options->minimum_amount=$request->input('minimum_amount');
        $widthraw_options->points_to_dinar=$request->input('points_to_dinar');
        $widthraw_options->update();
        return redirect()->route('receveur-management')->with('status','Widthraw Options Updated Successfully');

    }



    public function paginateo()
    {


        $paginate_options=PaginateOption::first();



        return view('admin.sitemanagement.paginate-options',compact('paginate_options') );
    }






    public function poupdate(Request $request)
    {

        $paginate_options=PaginateOption::first();

        $request->validate([
            'home_n_articles' => ['required'],
            'view_category_n_articles' => ['required'],
            'n_category' => ['required'],
            'n_articles_admin' => ['required'],
            'n_category_admin' => ['required'],
            'n_member_admin' => ['required'],
            'n_receveur_admin' => ['required'],
            'n_orders_admin' => ['required'],
            'n_payments_admin' => ['required']
        ]);

        $paginate_options->home_n_articles=$request->input('home_n_articles');
        $paginate_options->view_category_n_articles=$request->input('view_category_n_articles');
        $paginate_options->n_category=$request->input('n_category');
        $paginate_options->n_articles_admin=$request->input('n_articles_admin');
        $paginate_options->n_category_admin=$request->input('n_category_admin');
        $paginate_options->n_member_admin=$request->input('n_member_admin');
        $paginate_options->n_receveur_admin=$request->input('n_receveur_admin');
        $paginate_options->n_orders_admin=$request->input('n_orders_admin');
        $paginate_options->n_payments_admin=$request->input('n_payments_admin');
        $paginate_options->update();
        return redirect()->route('paginate-options')->with('status','Paginate Options Updated Successfully');

    }





    public function imageso()
    {

        $slides=SlideImage::orderBy('position', 'asc')->get();
        $logos=PaginateOption::first();
        return view('admin.sitemanagement.images-options', compact(['slides','logos']));

    }
    public function slideadd()
    {


        return view('admin.sitemanagement.slide-add');

    }



    public function slideinsert(Request $request)
    {

        $request->validate([

            'position' => ['required', 'unique:slide_images'],
            'image' => ['required']

        ]);

        $slides=new SlideImage();
        if($request->hasFile('image'))
        {

            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/slide-images',$filename);
            $slides->image=$filename;
        }
        $slides->title=$request->input('title');
        $slides->descreption=$request->input('descreption');
        $slides->position=$request->input('position');
        $slides->save();



        return redirect()->route('images-options')->with('status','Slide Created Successfully');
    }







    public function slideedit($id)
    {

        $slides=SlideImage::find($id);
        return view('admin.sitemanagement.slide-edit' , compact('slides'));

    }




    public function slideupdate(Request $request,$id)
    {



        $slides=SlideImage::find($id);;



        $request->validate([

            'position' => 'required', 'unique:slide_images,'.$id,


        ]);

        if($request->hasFile('image'))
        {
            $path='assets/uploads/slide-images/'.$slides->image;
            if(File::exists($path))
            {
                File::delete($path);

            }


            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/slide-images',$filename);
            $slides->image=$filename;
        }
        $slides->title=$request->input('title');
        $slides->descreption=$request->input('descreption');
        $slides->position=$request->input('position');
        $slides->update();



        return redirect()->route('images-options')->with('status','Slide Updated Successfully');
    }

    public function slidedelete($id)
    {

        $slides=SlideImage::find($id);
        if($slides->image)
        {
            $path='assets/uploads/slide-images/'.$slides->image;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $slides->delete();



        return redirect()->route('images-options')->with('status','Slide Deleted Successfully');
    }

    public function logo(Request $request)
    {



        $logo=PaginateOption::first();





        if($request->hasFile('image'))
        {
            $path='assets/uploads/logo/'.$logo->logo_image;
            if(File::exists($path))
            {
                File::delete($path);

            }


            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/logo',$filename);
            $logo->logo_image=$filename;
        }

        $logo->update();



        return redirect()->route('images-options')->with('status','Logo Updated Successfully');
    }


    public function hlogo(Request $request)
    {



        $hlogo=PaginateOption::first();





        if($request->hasFile('image'))
        {
            $path='assets/uploads/head-logo/'.$hlogo->head_logo_image;
            if(File::exists($path))
            {
                File::delete($path);

            }


            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/head-logo',$filename);
            $hlogo->head_logo_image=$filename;
        }

        $hlogo->update();



        return redirect()->route('images-options')->with('status','Head Logo Updated Successfully');
    }









}
