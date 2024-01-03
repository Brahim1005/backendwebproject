<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data=new product;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage', $imagename);
        
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product added succesfully');
        
    }

    public function showproduct()
    {
        $data=Product::all();
        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted succesfully');
    }

    public function updateproductview($id)
    {
        $data=Product::find($id);
        return view('admin.updateproductview', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data=Product::find($id);

        $image=$request->file;

        if ($image) 
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);
            $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product updated succesfully');

    }

    public function showorder()
    {

        $order=order::all();
        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id)
    {
        $order=order::find($id);
        
        $order->status='delivered';
        
        $order->save();

        return redirect()->back();
    }
}
