<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use Symfony\Contracts\Service\Attribute\Required;

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

    public function search(Request $request)
    {
        $search=$request->search;

        if ($search=='') 
        {
            $data = Product::paginate(6);
            return view('user.home',compact('data'));   
        }

        $data=Product::where('title', 'Like', '%'.$search.'%')->get();

        return view('user.home', compact('data'));

    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) 
        {
            $user=auth()->user();
            $product=product::find($id);

            $cart=new Cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            
            $cart->save();


            return redirect()->back();
        }
        else 
        {
            return redirect('login');
        }
    }
}
