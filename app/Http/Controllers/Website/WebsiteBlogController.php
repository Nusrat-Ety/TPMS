<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Location;
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
    public function BlogAdd(){
        $user=User::all();
        $location=Location::all();
        
        return view('website.pages.Blog.UserAddBlog',compact('user','location'));
    }
    }
    

