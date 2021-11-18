<?php
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.layouts.index');
});

Route::get('/index',[IndexController::class,'index']);
Route::get('/plan',[IndexController::class,'plan']);
Route::get('/dashboard',[IndexController::class,'index']);
Route::get('/Mtraveler',[TravelerController::class,'ManageTraveler']);
Route::get('/Ltraveler',[TravelerController::class,'TravelerList']);
Route::get('/Addevent',[EventController::class,'Addevent']);
Route::get('/Mtevent',[EventController::class,'TravelerEvent']);
Route::get('/MeventR',[EventController::class,'ManageEventReq']);
Route::get('/MTourP',[TourController::class,'Managetourplan']);
Route::get('/MPlanReq',[TourController::class,'ManagetourplanReq']);
Route::get('/VPlan',[TourController::class,'Viewtourplan']);
Route::get('/admin/addtraveler',[TravelerController::class,'addtraveler'])->name('admin.traveler.addtraveler');
Route::post('/admin/add/travelers',[TravelerController::class,'posttraveler'])->name('admin.traveler.post');

Route::post('Event/eventstore',[EventController::class,'Eventcreate'])->name('admin.Event.create');