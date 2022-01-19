<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AddTourPlan;
use App\Models\User;
use App\Models\Spot;
use App\Models\Transport;
use App\Models\Location;
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
            $Tourplans=AddTourPlan::with('user','spot','location','transports')
            ->whereLike(['spot.SpotName','user.name','Tourname'],$key)->get();
        return view('admin.layouts.Tourplan.AdminTourList',compact('Tourplans','key'));
        }
        $Tourplans=AddTourPlan::with('user','spot','location','transports')->get();
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
    public function approveTour($tourplan_id){
        $Tourplan=AddTourPlan::find($tourplan_id);
        
        if($Tourplan)
        {
            $Tourplan->update([
                'status'=>'approved'
            ]);
            return redirect()->back()->with('success','Tour plan has been approved');
        }
        return redirect()->back();
    
    }
    public function declineTour($tourplan_id){
        $Tourplan=AddTourPlan::find($tourplan_id);
        
        if($Tourplan)
        {
            $Tourplan->update([
                'status'=>'decline'
                
            ]);
            
            // $TourPlans=AddTourPlan::find($tourplan_id)->delete();
            return redirect()->back()->with('error','Tour plan has been declined');
        }
        return redirect()->back();
    
    }
    
    
}
