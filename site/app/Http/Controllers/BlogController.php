<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class BlogController extends Controller
{
    function blogRead($id)
    {
        $blogData = BlogModel::find($id);
        return view('BlogPost', ['blogData' => $blogData]);
    }
    function blogIndex()
    {
        $BlogData = json_decode(BlogModel::all());
        return view('AllBlog', ['BlogData' => $BlogData]);
    }

}