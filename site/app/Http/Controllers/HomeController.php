<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\VisitorModel;
use Illuminate\Http\Request;

use App\Models\ContactModel;


use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{ //
    function HomeIndex()
    {

        $productData = json_decode(ProductModel::all());

        return view('Home', ['productData' => $productData]);

    }
    function ProductIndex($id)
    {
        // $UserIP = $_SERVER['REMOTE_ADDR'];
        $UserIP = '103.148.74.81';

        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        $currentUserInfo = Location::get($UserIP);



        $productData = json_decode(ProductModel::all());

        $productID = ProductModel::find($id);

        VisitorModel::insert([
            'pId' => $productID->id,
            'vIp' => $UserIP,
            'vCountry' => $currentUserInfo->countryName,
            'vCity' => $currentUserInfo->cityName,
            'vPost' => $currentUserInfo->zipCode
        ]);
        return view('Product', ['productData' => $productData, 'productID' => $productID]);


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