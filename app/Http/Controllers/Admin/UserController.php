<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function manageUsers()
    {
        $users = User::all();
        return view('admin.manageUsers', compact('users'));
    }

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

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user && Auth::user()->usertype == '1') {
            $user->delete();
            return redirect()->back()->with('message', 'User deleted successfully');
        }
        return redirect()->back()->with('error', 'Operation failed');
    }

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
