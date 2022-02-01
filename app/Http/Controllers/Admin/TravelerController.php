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

    public function TravelerReportshow(){
        $Traveler=User::all();
        return view('admin.layouts.Traveler.Traveler-report',compact('Traveler'));
    }
    public function TravelerReport(Request $request)
    {

        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);

        $Traveler=User::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.Traveler.Traveler-report',compact('Traveler'));

    }

    
    
}
