<?php

namespace App\Http\Controllers\Website;
use App\Models\AddTourPlan;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Spot;
use App\Models\Location;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //show tour in website
    public function TourPlan(){
        $user=User::all();
        $spot=Spot::all();
        $location=Location::all();

        return view('website.pages.Tourplan.TourPlan',compact('user','spot','location'));
    }
    public function storeTourPlan(Request $request){
        // dd($request->all());
        AddTourPlan::create([
                'Tourname'=>$request->TourName,
                'from'=>$request->From,
                'location_id'=>$request->TourDestination,
                'spot_id'=>$request->spotname,
                'TourDuration'=>$request->TourDuration,
                'Transport'=>$request->Transport,
                'members'=>$request->members,
                'TourDate'=>$request->TourDate,
                'TourBudget'=>$request->TourBudget,
                'user_id'=>$request->username,
                
            ]);
            return redirect()->route('website')->with('msg','Tour plan created successfully.'); 
    }
    public function ViewTourPlanUser(){
        $tourplans=AddTourPlan::with('User','spot','location')->where('status','approved')->get();
        // dd($tourplans);
        return view('website.pages.home',compact('tourplans'));

    }
}
