<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    //add transport
    public function addransport(){
        return view('admin.layouts.transport.Addtransport');
    }
    public function Storetransport(Request $request){
        Transport::create([
            'transportName'=>$request->TransportName,
            'transportType'=>$request->TransportType,
            'location'=>$request->location

        ]);
        return redirect()->back();
      
    }
    public function TransportList(){
        $Transports=Transport::all();
        return view('admin.layouts.transport.TransportList',compact('Transports'));
    }
}
