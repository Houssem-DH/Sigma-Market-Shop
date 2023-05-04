<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\User;
use App\Models\Point;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;
use App\Models\ReceveurManagement;
use App\Models\PaginateOption;
use App\Models\SlideImage;


class FrontendController extends Controller
{
    public function index( )
    {

                $paginate_options=PaginateOption::first();
                $slides=SlideImage::orderBy('position', 'asc')->where('position', '!=', 1)->get();
                $slides1=SlideImage::where('position', '=', 1)->get();
                $count = DB::table('articles')->count();
                $articles=Article::orderBy('created_at', 'desc')->paginate($paginate_options->home_n_articles);
                $featured_categories=Category::where('popular',1)->get();
                return view('frontend.home', compact(['articles','featured_categories','count','paginate_options','slides','slides1']));


    }
    public function category()
    {
        $paginate_options=PaginateOption::first();
        $categories=Category::paginate($paginate_options->n_category);
        return view('frontend.categories', compact('categories'));
    }

    public function viewcategory($slug)
    {

        if(Category::where('slug',$slug)->exists())
        {
            $paginate_options=PaginateOption::first();
            $all_categories= Category::all();
           $categories= Category::where('slug',$slug)->first();
           $articles=Article::where('cate_id',$categories->id)->paginate($paginate_options->view_category_n_articles);
           return view('frontend.articles.index', compact(['articles','categories','all_categories']));
        }
        else
        {
            return redirect('/');
        }
    }

    public function newproducts()
    {
        $paginate_options=PaginateOption::first();
        $all_categories= Category::all();
        $newproducts=Article::orderBy('created_at', 'desc')->paginate($paginate_options->view_category_n_articles);

                return view('frontend.articles.newproducts', compact(['newproducts','all_categories']));
    }


    public function viewarticle($arti_slug)
    {

        $articles=Article::where('slug',$arti_slug)->first();

                return view('frontend.articles.view', compact('articles'));



    }




    protected $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function viewarticler($arti_slug,$id)
    {

        $receveur_management=ReceveurManagement::first();
        $time = $receveur_management->time;

        $value = $this->session->get('name');



        $users=User::find($id);


        if(time() - $value >$time)
        {
            $this->session->forget('name');
        }
        if($this->session->has('name'))

        {



            $articles=Article::where('slug',$arti_slug)->first();



            return view('frontend.articles.viewr', compact('articles'));
        }

       else
       {



        if(Point::where('user_id',$id)->exists())
        {

            $points=Point::where('user_id',$id)->exists();

            if(!Auth::check())
            {
            DB::table('points')
            ->where('user_id', $id)
            ->increment('points_count',$receveur_management->points_on_visite);
        }
        elseif(Auth::user()->id!=$id)            //(Auth::user()->id!=$id)
        {
            DB::table('points')
            ->where('user_id', $id)
            ->increment('points_count',$receveur_management->points_on_visite);
        }
        $articles=Article::where('slug',$arti_slug)->first();




        $this->session->put('name', time());







                return view('frontend.articles.viewr', compact(['articles','users']));
        }
        else {
            return redirect('/');
             }
            }

    }

    public function register()
    {
        $users=User::all();
        return view('auth.register' ,compact('users'));


    }
    public function search()
    {
        $search_text=$_GET['query'];
        $articles=Article::where('meta_keywords','LIKE','%'.$search_text.'%')->get();
        $categories=Category::where('meta_keywords','LIKE','%'.$search_text.'%')->get();
        return view('frontend.search' ,compact(['articles','categories']));


    }



}
