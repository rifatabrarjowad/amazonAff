<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactModel;

class HomeController extends Controller
{ //
    function HomeIndex()
    {

        return view('Home');

    }
    function HomeContact(Request $request)
    {
        $contact = new ContactModel;
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect('/')->with('status', 'Massage sent Successfully');
    }
}