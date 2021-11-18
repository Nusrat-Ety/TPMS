<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
     //for showing the admin dashboard
    public function index(){
        return view('admin.layouts.index');
    }

    public function plan(){
        return view('admin.layouts.plan');
    }
}
