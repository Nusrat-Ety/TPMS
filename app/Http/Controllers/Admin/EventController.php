<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    //here you can create new event
    public function Addevent(){
        return view('admin.layouts.Event.Addevent');
    }
    //for traveler event 
    Public function TravelerEvent(){
        return view('admin.layouts.Event.TravelerEvent');
    }
    //for managing event request of user
    Public function ManageEventReq(){
        return view('admin.layouts.Event.EventReq');
    }
    public function Eventcreate(Request $request){
        Event::create([
            'name'=>$request->name,
            'description'=> $request->description,
            'destination'=>$request->destination,
            'duration'=>$request->duration,
            'Date'=>$request->Date,
            'deparature_time'=>$request->deparature_time,
            'traveler_amount'=>$request->traveler_amount,
            'cost'=>$request->cost

        ]);
        return redirect()->back();

    }
}
