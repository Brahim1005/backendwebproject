<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

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
            $data = Product::paginate(6);

            return view('user.home',compact('data')); 
        }
    }

    public function home()
    {

        if (Auth::id()) 
        {
            return redirect('homeadmin');
        }

        else 
        {

            $data = Product::paginate(6);

            return view('user.home',compact('data'));        
        }
    }
}
