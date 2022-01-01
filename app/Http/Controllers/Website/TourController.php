<?php

namespace App\Http\Controllers\Website;
use App\Models\AddTourPlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //show tour in website
    public function TourPlan(){
        return view('website.pages.Tourplan.TourPlan');
    }
    public function storeTourPlan(Request $request){
        AddTourPlan::create([
                'Tourname'=>$request->TourName,
                'TourDestination'=>$request->TourDestination,
                'TourSpot'=>$request->TourSpot,
                'TourDuration'=>$request->TourDuration,
                'Transport'=>$request->Transport,
                'members'=>$request->members,
                'TourDate'=>$request->TourDate,
                'TourBudget'=>$request->TourBudget,
                'Travelar_name'=>$request->Travelar_name,
            ]);
            return redirect()->route('website')->with('msg','Tour plan created successfully.'); 
    }
    public function ViewTourPlanUser(){
        $tourplans=AddTourPlan::all();
        return view('website.pages.home',compact('tourplans'));

    }
}
