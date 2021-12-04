<?php

namespace App\Http\Controllers\Website;
use App\Models\Spot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home
    public function home(){
        $spots=Spot::all();
        return view('website.pages.home',compact('spots'));
    }
}
