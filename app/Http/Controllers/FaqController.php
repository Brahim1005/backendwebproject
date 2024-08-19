<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Faq;
use App\Models\FaqCategory;
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
        $request->validate([
            'question' => 'required|string',
            'category_id' => 'required|exists:faq_categories,id', // Ensure category_id exists in faq_categories table
        ]);
    
        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->category_id = $request->input('category_id');  // Store the category ID
    
        $faq->save();
    
        return redirect()->back()->with('success', 'Question sent successfully!');
    }
    
    


    public function showfaq()
    {
        $user = auth()->user();
        $cart = [];
        $count = 0;

        if ($user) {
            $cart = Cart::where('phone', $user->phone)->get();
            $count = Cart::where('phone', $user->phone)->count();
        }

        $categories = FaqCategory::with('faqs')->get();

        return view('user.faq', compact('categories', 'count', 'cart'));
    }
    // public function showfaq()
    // {
    //     $user = auth()->user();
    //     $cart = [];
    //     $count = 0;
     
    //     if ($user) {
    //         $cart = Cart::where('phone', $user->phone)->get();
    //         $count = Cart::where('phone', $user->phone)->count();
    //     }
        
    //     $faq=Faq::all();
    //     return view('user.faq', compact('faq','count', 'cart'));
    // }

}
