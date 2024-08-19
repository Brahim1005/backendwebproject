<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function showFaqCategories()
    {
        $categories = FaqCategory::all();
        return view('admin.faqCategory', compact('categories'));
    }

    public function storeFaqCategory(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $category = new FaqCategory;
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('message', 'FAQ Category added successfully');
    }

    public function updatefaqcategoryview($id)
    {
        $category = FaqCategory::find($id);
        return view('admin.updatefaqcategoryview', compact('category'));
    }

    public function updateFaqCategory(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $category = FaqCategory::find($id);
        if ($category) {
            $category->name = $request->name;
            $category->save();
            return redirect()->back()->with('message', 'FAQ Category updated successfully');
        }
        return redirect()->back()->with('error', 'FAQ Category not found');
    }

    public function deleteFaqCategory($id)
    {
        $category = FaqCategory::find($id);
        if ($category) {
            $category->delete();
            return redirect()->back()->with('message', 'FAQ Category deleted successfully');
        }
        return redirect()->back()->with('error', 'FAQ Category not found');
    }
}
