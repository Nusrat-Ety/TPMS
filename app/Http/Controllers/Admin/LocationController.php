<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function createLocation(){
    return view('admin.layouts.Location.location');
    }
    public function storeLocation(Request $request){
        // dd($request->all());
        $LocationImageFile='';
        if($request->hasFile('location_image')){
            $file=$request->file('location_image');
            $LocationImageFile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Locations/',$LocationImageFile);

        }
        Location::create([
           
            'Location_name'=>$request->LocationName,
            'Country'=>$request->Country,
            'Location_image'=>$LocationImageFile,
            'LocationDetails'=>$request->Locationdetails
        ]);
        return redirect()->back()->with('msg','Your location added successfully.');

    }
    public function LocationList(){
        $locations=Location::all();
        return view('admin.layouts.Location.LocationList',compact('locations'));

    }
    public function deletelocation($location_id){
        $locations=Location::find($location_id)->delete();
        return redirect()->back()->with('success','Location deleted successfully');

    }
}
