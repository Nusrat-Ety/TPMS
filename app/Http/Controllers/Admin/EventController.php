<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\TravelerEvent;
use App\Models\Travelar;
use Illuminate\Http\Request;


class EventController extends Controller
{
    //here you can create new event
    public function Addevent(){
        return view('admin.layouts.Event.Addevent')->with('msg','Event Created Successfully.');
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
    //for creating traveler event 
    Public function TravelerEventCreate(){
        return view('admin.layouts.Event.TravelerEventCreate');
    }
    public function posttravelerEvent(Request $request){
        TravelerEvent::create([
            'event_name'=>$request->name,
            'event_description'=> $request->description,
            'event_destination'=>$request->destination,
            'event_duration'=>$request->duration,
            'event_Date'=>$request->Date,
            'event_deparature_time'=>$request->deparature_time,
            'traveler_amount'=>$request->traveler_amount,
            'cost'=>$request->cost,
            'traveler_name'=>$request->traveler_name
        ]);
        return redirect()->back();
        }
        public function TravelerEventList(){

            $travelarEvents=TravelerEvent::all();
            //$travelars = travelar::with('first_name')->get();
            return view('admin.layouts.Event.TravelerEventList',compact('travelarEvents'));
        }
        }
    

