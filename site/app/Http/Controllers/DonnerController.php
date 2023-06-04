<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Donner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DonnerModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DonnerController extends Controller
{

    function Index()
    {
        return view('LoginPage');
    }
    function SignUp()
    {
        return view('SignUpPage');
    }
    // function DonnerIndex(Request $request)
    // {
    //     $DonnerData = json_decode(DonnerModel::all());
    //     if ($request->blood != null)
    //         $DonnerData = $DonnerData->orwhere('donner.blood', 'like', '%' . $request->blood . '%');
    //     return view('Donner', ['DonnerData' => $DonnerData]);

    // }
    function DonnerIndex(Request $request)
    {
        $query = DonnerModel::query(); // Initialize the query builder

        if ($request->input('divisions') !== null) {
            $query->Where('division', 'like', '%' . $request->input('divisions') . '%');
        }
        if ($request->input('jela') !== null) {
            $query->Where('district', 'like', '%' . $request->input('jela') . '%');
        }
        if ($request->input('Thana') !== null) {
            $query->Where('station', 'like', '%' . $request->input('Thana') . '%');
        }
        if ($request->input('blood') !== null) {
            $query->Where('blood', 'like', '%' . $request->input('blood') . '%');
        }
        if ($request->input('gender') !== null) {
            $query->Where('gender', 'like', '%' . $request->input('gender') . '%');
        }

        $DonnerData = $query->get(); // Execute the query and retrieve the results

        return view('Donner', ['DonnerData' => $DonnerData]);
    }
    function LogoutDonner()
    {
        Auth::guard('donner')->logout();
        return redirect()->route('login_from')->with('error', 'Logout Sucessfully');
        # code...
    }
    function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('donner')->attempt(['username' => $check['username'], 'password' => $check['password']])) {
            return redirect('/')->with('error', 'Login sucessfully');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }
    function Create(Request $request)
    {



        // dd($request->all());
        DonnerModel::insert([
            'name' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->userPassword),

        ]);
        return redirect()->route('login_from')->with('error', 'Account Create Sucessfully');
    }
}