<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function homeadmin()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype=='1') 
        {
            return view('admin.home');
        }
        else
        {
            return view('user.home');
        }
    }

    public function home()
    {
        return view('user.home');
    }
}
