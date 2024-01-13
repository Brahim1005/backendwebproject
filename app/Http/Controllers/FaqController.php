<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;

class FaqController extends Controller
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

        return view('user.faq', compact('count', 'cart'));
    }

    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');

        $faq->save();

        return redirect()->back()->with('success', 'Contact form send successfully!');
    }

    public function showfaq()
    {
        $faq=Faq::all();
        return view('user.faq', compact('faq'));
    }

}
