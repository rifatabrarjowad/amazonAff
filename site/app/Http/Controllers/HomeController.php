<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

use App\Models\ContactModel;

class HomeController extends Controller
{ //
    function HomeIndex()
    {

        $productData = json_decode(ProductModel::all());

        return view('Home', ['productData' => $productData]);

    }
    function ProductIndex()
    {



        return view('Product');

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