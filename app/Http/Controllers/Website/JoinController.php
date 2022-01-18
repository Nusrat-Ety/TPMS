<?php

namespace App\Http\Controllers\website;
use App\Models\Join;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    
}
