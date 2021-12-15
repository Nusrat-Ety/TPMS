<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class WebsiteBlogController extends Controller
{
   public function BlogView($id){
    //    dd($id);
    $blogs = Blog::find($id);
    //  dd($blogs);
    if ($blogs) {
        return view('website.pages.blog.Blog',compact('blogs'));
    }

    else
    return "Blog not found!";
       
    }
    
}
