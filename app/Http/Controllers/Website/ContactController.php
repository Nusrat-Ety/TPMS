<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Models\Query;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function QueryView(){
        $user=User::all();
        return view('website.pages.contact.queryview',compact('user'));
    }
    public function QueryStore(Request $request){
        Query::create([
            'user_id'=>$request->useremail,
            'subject'=>$request->subject,
            'question'=>$request->question

        ]);
        return redirect()->back()->with('msg','query sent. Wait for your reply.'); 
    }
    public function replyview(){
$query=Query::where('status','replied')->get();
return view('website.pages.contact.replyview',compact('query'));
    }
}
