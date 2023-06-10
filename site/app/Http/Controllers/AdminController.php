<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Models\ProductModel;
use App\Models\VisitorModel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    function Index()
    {
        $visit = VisitorModel::orderBy('vTime', 'desc')->get();

        return view('AdminDas', [
            'visit' => $visit,
            'DB' => DB::class,
            'Carbon' => Carbon::class,
        ]);
    }
    function AddProduct()
    {
        $productData = json_decode(ProductModel::all());

        return view('AddProduct', [
            'productData' => $productData,
            'DB' => DB::class,
            'Carbon' => Carbon::class,
        ]);
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
    function deleteProduct($id)
    {
        $blog = ProductModel::find($id);
        $destination = 'uploads/product/' . $blog->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $blog->delete();
        return redirect('/AddProduct')->with('status', 'Blog Deleted Successfully');
    }
}