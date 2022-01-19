<?php

namespace App\Http\Controllers\website;
use App\Models\Join;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JoinController extends Controller
{
    public function JoinRequest($plan_id){
       

        Join::create([
            'user_id'=>auth()->user()->id,
            'tourplan_id'=>$plan_id,
            'status'=>'pending'

        ]);
       
        return redirect()->back();
    }

    public function joinApprove($join_id){
        // dd($join_id);
        $joinRequest = Join::find($join_id);
        // dd($joinRequest);
        $planer = AddTourPlan::where('id',$joinRequest->tourplan_id)->get();
        // dd($planer);
        $planer_user = $planer->pluck('user_id');
        // dd($planer_user[0]);
        // dd(auth()->user());
        if ($planer_user[0] == auth()->user()->id) {
            if ($joinRequest) {
                $joinRequest->update([
                    'status'=>'approved'
                ]);
            }
        }
        return redirect()->back();

        
    }
    public function joinDecline($join_id){
        // dd($join_id);
        $joinRequest = Join::find($join_id);
        // dd($joinRequest);
        $planer = AddTourPlan::where('id',$joinRequest->tourplan_id)->get();
        // dd($planer);
        $planer_user = $planer->pluck('user_id');
        // dd($planer_user[0]);
        // dd(auth()->user());
        if ($planer_user[0] == auth()->user()->id) {
            if ($joinRequest) {
                $joinRequest->update([
                    'status'=>'declined'
                ]);
            }
        }
        return redirect()->back();

        
    }
    
}
