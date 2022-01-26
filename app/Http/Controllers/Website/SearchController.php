<?php

namespace App\Http\Controllers\website;
use App\Models\Spot;
use App\Models\AddTourPlan;
use App\Models\Join;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Query;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    
    // public function search(){
    
    // //     $result = AddTourPlan::where([
    // //         ['location_id','location'],
    // //         ['spot_id','spot']
    // //     ])->get();
    // //     $spots=Spot::all();
    // //     $locations=Location::all();
    // //     $Blogs=Blog::where('status','approved')->get();
    // //     $query=Query::Where('status','replied')->get();

    // //     $tourplans=AddTourPlan::where('status','approved')->get();
    // //     $reviews=Review::where('status','approved')->get();
    // //     if (auth()->user()) {
    // //         $user = auth()->user()->id;
    // //        $join=Join::where('user_id',$user)->get();
    // //        }
    // //        else {
    // //            $join=Join::all();
    // //        }
        
    // //     return view('website.pages.home',compact('Blogs','query','result','spots','locations','tourplans','join','reviews'));
    // // }


    public function search(Request $request)
    {
        // dd($request->all());
        $data = AddTourPlan::all();
        if( $request->Tourname){
            $data = $data->where('Tourname', 'LIKE', "%" . $request->Tourname . "%");
        }
        if( $request->location_id){
            $data = $data->where('location_id', 'LIKE', "%" . $request->location_id . "%");
        }
        if( $request->spot_id ){
            $data = $data->where('spot_id', 'LIKE', "%" . $request->spot_id . "%");
        }
        $data = $data->get();
        return view('website.tourplan.search', compact('data'));
    }
}
