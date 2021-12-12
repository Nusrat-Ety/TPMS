<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //view blog page
    public function BlogView(){
        return view('website.pages.Blog');
    }
}
