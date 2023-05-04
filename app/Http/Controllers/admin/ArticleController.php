<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use App\Models\PaginateOption;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function index()
    {
        $paginate_options=PaginateOption::first();

        $articles=Article::orderBy('created_at', 'desc')->paginate($paginate_options->n_articles_admin);
        return view('admin.article.index', compact('articles'));
    }

    public function add()
    {
        $category=Category::all();
        return view('admin.article.add',compact('category'));
    }

    public function insert(Request $request)
    {

        $request->validate([
            'cate_id' => ['required'],
            'name' => ['required'],
            'slug' => ['required', 'unique:articles'],
            'price' => ['required'],
            'percentage' => ['required'],
            'qty' => ['required'],
            'tax' => ['required'],
            'description' => ['required'],
            'small_description' => ['required'],
            'image' => ['required']

        ]);

        $articles=new Article();
        if($request->hasFile('image'))
        {

            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/article',$filename);
            $articles->image=$filename;
        }
        $articles->cate_id=$request->input('cate_id');
        $articles->name=$request->input('name');
        $articles->slug=$request->input('slug');
        $articles->price=$request->input('price');
        $articles->percentage=$request->input('percentage');
        $articles->qty=$request->input('qty');
        $articles->tax=$request->input('tax');
        $articles->description=$request->input('description');
        $articles->small_description=$request->input('small_description');
        $articles->new=$request->input('new') == TRUE?'1':'0';
        $articles->trending=$request->input('trending')== TRUE?'1':'0';
        $articles->meta_title=$request->input('meta_title');
        $articles->meta_keywords=$request->input('meta_keywords');
        $articles->meta_description=$request->input('meta_description');
        $articles->save();
        return redirect()->route('articles')->with('status','Article Added Successfully');
    }

    public function edit($id)
    {
        $articles=Article::find($id);
        return view('admin.article.edit', compact('articles'));

    }

    public function update(Request $request,$id)
    {



        $articles=Article::find($id);
        if($request->hasFile('image'))
        {
            $path='assets/uploads/article/'.$articles->image;
            if(File::exists($path))
            {
                File::delete($path);

            }

            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/article',$filename);
            $articles->image=$filename;
        }

        $articles->name=$request->input('name');
        $articles->slug=$request->input('slug');
        $articles->price=$request->input('price');
        $articles->percentage=$request->input('percentage');
        $articles->qty=$request->input('qty');
        $articles->tax=$request->input('tax');
        $articles->description=$request->input('description');
        $articles->small_description=$request->input('small_description');
        $articles->new=$request->input('new') == TRUE?'1':'0';
        $articles->trending=$request->input('trending')== TRUE?'1':'0';
        $articles->meta_title=$request->input('meta_title');
        $articles->meta_keywords=$request->input('meta_keywords');
        $articles->meta_description=$request->input('meta_description');
        $articles->update();
        return redirect()->route('articles')->with('status1','Article Updated Successfully');

    }

    public function destroy($id)
    {
        $articles=Article::find($id);
        if($articles->image)
        {
            $path='assets/uploads/article/'.$articles->image;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $articles->delete();
        return redirect()->route('articles')->with('status2','Article Deleted Successfully');
    }

}
