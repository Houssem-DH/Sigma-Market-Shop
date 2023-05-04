<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function log()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
