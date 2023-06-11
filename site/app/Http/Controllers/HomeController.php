<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\VisitorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\ContactModel;


use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{ // $UserIP2 = $_SERVER['REMOTE_ADDR'];
    //$UserIP = '103.148.74.81';
    function ProductIndexStore($id)
    {
        //$UserIP = $_SERVER['REMOTE_ADDR'];
        //$UserIP = Request::ip();
        $UserIP = '103.148.74.81';
        $timeDate = now()->toDateTimeString();
        $currentUserInfo = Location::get($UserIP);

        $productData = ProductModel::all();
        $productID = ProductModel::find($id);

        $visitStore = new VisitorModel;
        $visitStore->pId = $productID->id;
        $visitStore->vIp = $UserIP;
        $visitStore->vTime = $timeDate;
        $visitStore->vCountry = $currentUserInfo->countryName;
        $visitStore->vCity = $currentUserInfo->cityName;
        $visitStore->vPost = $currentUserInfo->zipCode;
        $visitStore->save();
        return view('Product', ['productData' => $productData, 'productID' => $productID]);
    }

    function HomeIndex()
    {

        $productData = json_decode(ProductModel::all());

        return view('Home', ['productData' => $productData]);

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