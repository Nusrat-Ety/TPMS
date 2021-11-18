<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Travelar;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    public function addtraveler(){
        return view('admin.layouts.Traveler.addtraveler');
    }
    //for managing the traveler info 
    Public function ManageTraveler(){
        return view('admin.layouts.Traveler.ManageTraveler');
    }
    //for showing the traveler list 
    Public function TravelerList(){
        $travelars=Travelar::all();
        // dd($travelars);
        return view('admin.layouts.Traveler.TravelerList',compact('travelars'));
    }

    public function posttraveler(Request $request){
        // dd($request->all());

        Travelar::create([
            'first_name'=>$request->Fname,
            'last_name'=>$request->Lname,
            'email'=>$request->email,
            'city'=>$request->City,
            'contact_number'=>$request->Contactnumber,
            'natinality'=>$request->Nationality,
            'NID'=>$request->NID,
            'Emergency_contact'=>$request->Econtact

        ]);
        return redirect()->back();
    }

    
    
}
