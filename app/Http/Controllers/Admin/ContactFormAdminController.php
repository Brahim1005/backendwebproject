<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contactform;

class ContactFormAdminController extends Controller
{
    public function showcontactform()
    {
        $contactform = Contactform::all();
        return view('admin.showcontactform', compact('contactform'));
    }

    public function deletecontactform($id)
    {
        $contactform = Contactform::find($id);
        $contactform->delete();
        return redirect()->back()->with('message', 'Contact form deleted successfully');
    }
}
