<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    // Show product if user has 0 usertype, if 1 show admin panel
    public function product()
    {        
        if (auth::id()) 
        {
            if (auth::user()->usertype=='1') 
            {
                return view('admin.product');
            }
            else
            {
                return redirect()->back();

            }
        }
        else 
        {
            return redirect('login');
        }
    }

    // Upload products in admin panel (shown on home page)
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

    // Show products in admin panel (admin can update and delete products)
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
    // End of showing products in Admine panel


    // Show orders on admin panel
    public function showorder()
    {

        $order=order::all();
        return view('admin.showorder', compact('order'));
    }

    // Admin can update the status of an order
    public function updatestatus($id)
    {
        $order=order::find($id);
        
        $order->status='delivered';
        
        $order->save();

        return redirect()->back();
    }

    // Show contact forms on admin panel (admin can delete forms)
    public function showcontactform()
    {
        $contactform=Contactform::all();
        return view('admin.showcontactform', compact('contactform'));
    }

    public function deletecontactform($id)
    {
        $contactform=Contactform::find($id);
        $contactform->delete();
        return redirect()->back()->with('message', 'Product updated succesfully');
    }
    // End of contact forms in admin panel


    // Show FAQ on admin panel
    public function showfaq()
    {
        $faq=Faq::all();
        return view('admin.showfaq', compact('faq'));
    }

    public function deletefaq($id)
    {
        $faq=Faq::find($id);
        $faq->delete();
        return redirect()->back()->with('message', 'Product updated succesfully');
    }

    public function updatefaqview($id)
    {
        $faq=Faq::find($id);
        return view('admin.updatefaqview', compact('faq'));
    }

    public function updatefaq(Request $request, $id)
    {
        $faq=Faq::find($id);

        $faq->question=$request->question;
        $faq->answer=$request->answer;

        $faq->save();

        return redirect()->back()->with('message', 'Question Answered succesfully');

    }

    // Manage Users (promote user to admin)

 // Show list of users with options to promote, delete, and create a new user
 public function manageUsers()
 {
     $users = User::all();
     return view('admin.manageUsers', compact('users'));
 }

 // Promote a user to admin
 public function promoteUser($id)
 {
     $user = User::find($id);

     if ($user && Auth::user()->usertype == '1') {
         $user->usertype = '1';
         $user->save();
         return redirect()->back()->with('message', 'User promoted to admin successfully');
     }

     return redirect()->back()->with('error', 'Operation failed');
 }

 // Delete a user
 public function deleteUser($id)
 {
     $user = User::find($id);

     if ($user && Auth::user()->usertype == '1') {
         $user->delete();
         return redirect()->back()->with('message', 'User deleted successfully');
     }

     return redirect()->back()->with('error', 'Operation failed');
 }

 // Create a new user with admin privileges
 public function createUser(Request $request)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|string|email|max:255|unique:users',
         'password' => 'required|string|min:8|confirmed',
     ]);

     if (Auth::user()->usertype == '1') {
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->usertype = '1'; // Set the new user as admin
         $user->save();

         return redirect()->back()->with('message', 'Admin user created successfully');
     }

     return redirect()->back()->with('error', 'Operation failed');
 }

}
