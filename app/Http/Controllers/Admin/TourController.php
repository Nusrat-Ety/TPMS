<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AddTourPlan;
use App\Models\Travelar;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //for managing tourplan 
    public function Managetourplan(){
        return view('admin.layouts.Tourplan.ManagePlan');
    }
    //for managing tourplan request from user
    public function ManagetourplanReq(){
        return view('admin.layouts.Tourplan.ManagePlanReq');
    }
    //for viewing the tourplan list of user
    public function ViewAdminTourList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Tourplans=AddTourPlan::where('Tourname','LIKE','%'.$key.'%')->orwhere('TourDestination','LIKE','%'.$key.'%')->orwhere('TourSpot','LIKE','%'.$key.'%')->get();
        return view('admin.layouts.Tourplan.AdminTourList',compact('Tourplans','key'));
        }
        $Tourplans=AddTourPlan::all();
     //dd($TourPlans);
      return view('admin.layouts.Tourplan.AdminTourList',compact('Tourplans','key'));
        
    }
    //for showing details of the tourplan
    public function TourPlanDetails($tourplan_id){
        $tourplan=AddTourPlan::find($tourplan_id);
        return view('admin.layouts.Tourplan.TourPlanDetails',compact('tourplan'));
    }
  
    
  
    public function DeleteTourPlan($tourplan_id){
        $TourPlans=AddTourPlan::find($tourplan_id)->delete();
     //dd($TourPlans);
      return redirect()->back()->with('success','Tour Plan deleted successfully');
        
    }
    
    
}
