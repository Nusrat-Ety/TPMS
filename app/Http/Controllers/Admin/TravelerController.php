<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    
    //for showing the traveler list 
    Public function TravelerList(){
       $travelers=User::all();
        // dd($travelers);
        return view('admin.layouts.Traveler.TravelerList',compact('travelers'));
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
        return redirect()->back()->with('msg','Traveler created successfully.');
    }

    
    
}
