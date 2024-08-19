<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // Show the public profile of a user
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profile.show', compact('user'));
    }


}
