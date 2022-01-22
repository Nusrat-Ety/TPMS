<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Models\AddTourPlan;
use App\Models\Query;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function QueryView($tourplan_id){
        $tourplan=AddTourPlan::find($tourplan_id);

        return view('website.pages.contact.queryview',compact('tourplan'));
    }
    public function QueryStore(Request $request){


        Query::create([
            'tourplan_id' =>$request->plan_id,
            'user_id' => auth()->user()->id,
            'subject'=>$request->subject,
            'query'=>$request->question

        ]);
      
        return redirect()->back()->with('msg','query sent. Wait for your reply.'); 
    }
    public function ViewQueryList(){
// $query=Query::where('status','replied')->get();
// return view('website.pages.contact.replyview',compact('query'));
$query=Query::with('user','tourplan')->get();
return view('website.pages.Contact.query-list',compact('query'));

    }
}
