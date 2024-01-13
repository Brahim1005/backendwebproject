<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;



class ContactformController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        $cart = [];
        $count = 0;
     
        if ($user) {
            $cart = Cart::where('phone', $user->phone)->get();
            $count = Cart::where('phone', $user->phone)->count();
        }
        
        return view('user.contactform', compact('count', 'cart'));
    }

    public function store(Request $request)
    {

        $contactForm = new Contactform();
        $contactForm->name = $request->input('name');
        $contactForm->email = $request->input('email');
        $contactForm->subject = $request->input('subject');
        $contactForm->message = $request->input('message');

        $contactForm->save();

        return redirect()->back()->with('success', 'Contact form send successfully!');
    }
}
