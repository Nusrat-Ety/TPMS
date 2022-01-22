<?php

namespace App\Http\Controllers\Website;
use App\Models\AddTourPlan;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Spot;
use App\Models\Transport;
use App\Models\Join;
use App\Models\Location;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //show tour in website
    public function TourPlan(){
        $user=User::all();
        $transports=Transport::all();
        $spot=Spot::all();
        $location=Location::all();

        return view('website.pages.Tourplan.TourPlan',compact('user','spot','location','transports'));
    }
    public function storeTourPlan(Request $request){
        // dd($request->all());
        AddTourPlan::create([
                'Tourname'=>$request->TourName,
                'from'=>$request->From,
                'location_id'=>$request->TourDestination,
                'spot_id'=>$request->spotname,
                'TourDuration'=>$request->TourDuration,
                'transport_id'=>$request->Transport,
                'members'=>$request->members,
                'TourDate'=>$request->TourDate,
                'TourBudget'=>$request->TourBudget,
                'user_id'=>$request->username,
                
            ]);
            return redirect()->route('website')->with('msg','Tour plan created successfully.'); 
    }
    public function ViewTourPlanUser(){
        $tourplans=AddTourPlan::with('User','spot','location','transports')->where('status','approved')->get();
        // dd($tourplans);
        return view('website.pages.home',compact('tourplans'));

    }
    public function ViewTourPlanDetails($tourplan_id){
       
        
        $tourplan=AddTourPlan::with('user','travelers')->find($tourplan_id);
        $joins=Join::with('user','tourplan')->where('tourplan_id',$tourplan_id)->get();
        

        return view('website.pages.Tourplan.ViewTourPlan',compact('tourplan','joins'));

    }


    public function viewTourList(){
        $tourplans=Join::with('user','tourplan')->get();
      
        return view('website.pages.Tourplan.TourPlanList',compact('tourplans'));
    }
    
  //My plan List
  public function MyPlanList(){
      $MyPlans=AddTourPlan::with('user','transports','spot','location')->where('user_id',auth()->user()->id)->get();
    //   dd($MyPlans);
    return view('website.pages.Tourplan.My-Plan.MyPlanList',compact('MyPlans'));
  }

  //my plan edit
  public function MyPlanEdit($tourplan_id){
      $planEdit=AddTourPlan::with('user','transports','spot','location')->find($tourplan_id);
      $transports=Transport::all();
      $spot=Spot::all();
      $location=Location::all();
      return view('website.pages.Tourplan.My-Plan.MyPlan-Edit',compact('planEdit','transports','spot','location'));
  }
 
//my plan update
    public function MyPlanUpdate(Request $request,$tourplan_id){
        $tourplan=AddTourPlan::with('user','transports','spot','location')->find($tourplan_id);
// dd($tourplan);
       $tourplan->update([
        'Tourname'=>$request->TourName,
        'from'=>$request->From,
        'location_id'=>$request->TourDestination,
        'TourDuration'=>$request->TourDuration,
        'TourDate'=>$request->TourDate,
        'TourBudget'=>$request->TourBudget,
        'members'=>$request->members,
        'transport_id'=>$request->Transport,
        'spot_id'=>$request->spotname,
        

       ]);
       return redirect()->route('Myplan.list')->with('success','blog updated successfully');
    }

    //the plans i joined
    public function MyJoinedPlanList(){
        $joinedplan=Join::with('tourplan','user')->where('user_id',auth()->user()->id)->get();
        // dd($joinedplan);
        return view('website.pages.Tourplan.My-Plan.MyJoined-PlanList',compact('joinedplan'));
    }
}

    
    


