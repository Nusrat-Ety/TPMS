<?php

namespace App\Http\Controllers\Website;
use App\Models\Spot;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Join;
use App\Models\Location;
use App\Models\AddTourPlan;
use App\Models\Query;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //home
    public function home(){
        $join=Join::all();
        $spots=Spot::all();
        $Blogs=Blog::where('status','approved')->get();
        $locations=Location::all();
        
        // $query=Query::all();
       $query=Query::Where('status','replied')->get();
       //dd($query);
        $tourplans=AddTourPlan::where('status','approved')->get();
        $reviews=Review::where('status','approved')->get();
        // dd($tourplans);
        // dd($Blogs);

        return view('website.pages.home',compact('spots','Blogs','tourplans','locations','query','reviews','join'));


    }


    

    
}
