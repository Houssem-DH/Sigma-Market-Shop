<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $counto = DB::table('orders')->count();
        $countm = DB::table('users')->count();
        $countc = DB::table('categories')->count();
        $counta = DB::table('articles')->count();
        return view('admin.dashboard', compact(['counto','countm','countc','counta']));

    }
}
