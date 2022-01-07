<?php

namespace App\Http\Controllers\admin;
use App\Models\Spot;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    //Add spot
    public function Addspot(){
        $locations=Location::all();
        return view('admin.layouts.Spot.Addspot',compact('locations'));
    }
    //store spot
    public function StoreSpot(Request $request){
        //  dd($request->all());
        $Spotimagefile='';
        if($request->hasFile('SpotImage')){
        
        $file=$request->file('SpotImage');
        $Spotimagefile = date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads/Spots/',$Spotimagefile);
        }
        //dd($resquest->all());
        Spot::create([
            
            'SpotName'=>$request->SpotName,
            'location_id'=>$request->SpotLocation,
            'SpotImage'=>$Spotimagefile,
             'SpotDetails'=>$request->Spotdetail
        ]);
        return redirect()->back()->with('msg','Spot created successfully.');
    }
    public function SpotList(){
        $Spots=Spot::with('location')->get();
        return view('admin.layouts.Spot.SpotList',compact('Spots'));
    }
    //spot details
    public function SpotDetails($spot_id)
    {

      $spot=Spot::find($spot_id);
        return view('admin.layouts.Spot.Spotdetails',compact('spot'));
    }

}
