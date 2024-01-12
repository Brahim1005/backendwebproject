<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;

class ContactformController extends Controller
{
    public function index()
    {
        return view('user.contactform');
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
