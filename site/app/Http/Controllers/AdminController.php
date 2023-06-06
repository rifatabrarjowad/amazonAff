<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class AdminController extends Controller
{
    function Index()
    {
        return view('AdminDas');
    }
    function AddProduct()
    {
        $productData = json_decode(ProductModel::all());

        return view('AddProduct', ['productData' => $productData]);
    }
    function AddPro(Request $request)
    {
        $blog = new ProductModel;
        $blog->title = $request->name;
        $blog->link = $request->link;
        $blog->price = $request->price;
        function make_slug($string)
        {
            return preg_replace('/\s+/u', '-', trim($string));
        }

        $slug = make_slug($request->name);
        $blog->slug = $slug;
        $blog->description = $request->description;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = $image->getClientOriginalName();
            $fileName = time() . '.' . $imageName;
            $image->move('uploads/product', $fileName);
            $blog->image = $fileName;
        }
        $blog->save();
        return redirect('/AddProduct')->with('status', 'Blog Created Successfully');


    }
}