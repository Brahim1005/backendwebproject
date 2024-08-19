<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqAdminController extends Controller
{
    public function showfaq()
    {
        $faq = Faq::all();
        return view('admin.showfaq', compact('faq'));
    }

    public function deletefaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->back()->with('message', 'FAQ deleted successfully');
    }

    public function updatefaqview($id)
    {
        $faq = Faq::find($id);
        return view('admin.updatefaqview', compact('faq'));
    }

    public function updatefaq(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->back()->with('message', 'FAQ updated successfully');
    }

    public function createfaqview()
    {
        $categories = FaqCategory::all();
        return view('admin.createfaqview', compact('categories'));
    }
    
    public function storefaq(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->category_id = $request->category_id; 
        $faq->save();

        return redirect()->back()->with('message', 'FAQ created successfully');
    }
}
