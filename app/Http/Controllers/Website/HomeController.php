<?php

namespace App\Http\Controllers\Website;
use App\Models\Spot;
use App\Models\Blog;
use App\Models\AddTourPlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home
    public function home(){
        $spots=Spot::all();
        $Blogs=Blog::all();
        $tourplans=AddTourPlan::where('status','approved')->get();
        // dd($tourplans);
        // dd($Blogs);
        return view('website.pages.home',compact('spots','Blogs','tourplans'));
    }

    
}
