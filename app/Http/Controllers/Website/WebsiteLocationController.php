<?php

namespace App\Http\Controllers\website;
use App\Models\Spot;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteLocationController extends Controller
{
    //
    public function LocationSpotView($location_id){
        $locations=Location::find($location_id);
        $spot=Spot::with('location')->where('location_id',$locations->id)->get();
        return view('website.Location.LocationSpotView',compact('locations','spot'));
    }
}
