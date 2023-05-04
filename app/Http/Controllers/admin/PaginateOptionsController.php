<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ReceveurManagement;
use App\Models\PaginateOption;
use Illuminate\Http\Request;

class PaginateOptionsController extends Controller
{
    public function index()
    {


        $paginate_options=PaginateOption::first();



        return view('admin.sitemanagement.index',compact('paginate_options') );
    }
}
