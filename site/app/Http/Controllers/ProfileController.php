<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonnerModel;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    function Index()
    {
        return view('ProfilePage');
    }
    function IndexUpdate(Request $request)
    {
        $username = Auth::guard('donner')->user()->id;
        $donner = DonnerModel::find($username);
        $donner->name = $request->name;
        $donner->number = $request->mobile;
        $donner->gender = $request->gender;
        $donner->blood = $request->blood;
        $donner->division = $request->divisions;
        $donner->district = $request->jela;
        $donner->station = $request->thana;
        $donner->blood = $request->blood;
        $donner->dateOfB = $request->dateOfBirth;
        $donner->lastDDate = $request->lastDDate;
        $donner->update();

        return redirect('/')->with('error', 'Profile Update Updated Successfully');

    }
    function profileD()
    {
        $username = Auth::guard('donner')->user()->id;
        $donner = DonnerModel::find($username);
        $donner->status = 2;

        $donner->update();

        return redirect('/')->with('error', 'Profile Update Updated Successfully');

    }
    function profileA()
    {
        $username = Auth::guard('donner')->user()->id;
        $donner = DonnerModel::find($username);
        $donner->status = 0;

        $donner->update();

        return redirect('/')->with('error', 'Profile Update Updated Successfully');

    }
}