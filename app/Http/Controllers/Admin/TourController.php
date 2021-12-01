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
    //for viewing the tourplan of user
    public function Viewtourplan(){
        return view('admin.layouts.Tourplan.ViewPlan');
    }
    public function addtourplan(){
      $Travelars = Travelar::all();
        return view('admin.layouts.Tourplan.Addtourplan',compact('Travelars'));
    }
    
    public function ViewAdminTourList(){
        $TourPlans=AddTourPlan::with('Travelar')->get();
     //dd($TourPlans);
      return view('admin.layouts.Tourplan.AdminTourList',compact('TourPlans'));
        
    }
    public function StoreTourplan(Request $request){
        // dd(date('Ymdhms'));
        // dd($request->all());
        $filename = '';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);

        }
        AddTourPlan::create([
            'Tourname'=>$request->TourName,
            'TourDestination'=>$request->TourDestination,
            'TourDuration'=>$request->TourDuration,
            'TourDate'=>$request->TourDate,
            'TourCost'=>$request->TourCost,
            'Travelar_id'=>$request->Travelar_name,
            'image'=>$filename
        ]);
        return redirect()->back()->with('msg','Tour plan created successfully.');

    }
    
    
}
