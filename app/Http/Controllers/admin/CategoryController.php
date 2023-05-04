<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\PaginateOption;


class CategoryController extends Controller
{
    public function index()
    {
        $paginate_options=PaginateOption::first();
        $category=Category::orderBy('created_at', 'desc')->paginate($paginate_options->n_category_admin	);
        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)

    {

        $request->validate([

            'name' => ['required'],
            'slug' => ['required', 'unique:categories'],
            'descreption' => ['required'],
            'image' => ['required']

        ]);


        $category=new Category();
        if($request->hasFile('image'))
        {

            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }

        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->descreption=$request->input('descreption');
        $category->new=$request->input('new') == TRUE?'1':'0';
        $category->popular=$request->input('popular')== TRUE?'1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_descrip=$request->input('meta_descrip');
        $category->save();

        return redirect()->route('categories')->with('status','Category Added Successfully');

    }

    public function edit($id)
    {


        $category=Category::find($id);
        return view('admin.category.edit', compact('category'));

    }

    public function update(Request $request,$id)
    {







        $category=Category::find($id);
        if($request->hasFile('image'))
        {
            $path='assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);

            }

            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->descreption=$request->input('descreption');
        $category->new=$request->input('new') == TRUE?'1':'0';
        $category->popular=$request->input('popular')== TRUE?'1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_descrip=$request->input('meta_descrip');
        $category->update();
        return redirect()->route('categories')->with('status1','Category Updated Successfully');

    }

    public function destroy($id)
    {
        $category=Category::find($id);
        if($category->image)
        {
            $path='assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $category->delete();
        return redirect()->route('categories')->with('status2','Category Deleted Successfully');
    }
}


