<?php
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\SpotController;
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
//index Controller
Route::get('/index',[IndexController::class,'index']);
Route::get('/plan',[IndexController::class,'plan']);
Route::get('/dashboard',[IndexController::class,'index']);


//tour controller
Route::get('/MTourP',[TourController::class,'Managetourplan']);
Route::get('/managetour/Addtourplan',[TourController::class,'addtourplan'])->name('admin.addTourplan');
Route::get('/MPlanReq',[TourController::class,'ManagetourplanReq']);
Route::get('/VPlan',[TourController::class,'Viewtourplan']);
Route::get('/ManageTourplan/AdminAddedTourlist',[TourController::class,'ViewAdminTourList'])->name('admin.added.TourList');
Route::post('/admin/StoreTourplan',[TourController::class,'StoreTourplan'])->name('Admin.Tourplan.Store');

//traveller controller
Route::get('/Mtraveler',[TravelerController::class,'ManageTraveler']);
Route::get('/Ltraveler',[TravelerController::class,'TravelerList']);
Route::get('/admin/addtraveler',[TravelerController::class,'addtraveler'])->name('admin.traveler.addtraveler');
Route::post('/admin/add/travelers',[TravelerController::class,'posttraveler'])->name('admin.traveler.post');

//Transport
Route::get('/admin/Transport/Addtransport',[TransportController::class,'addransport'])->name('admin.addtransportform');
Route::post('/admin/Transport/Storetransport',[TransportController::class,'Storetransport'])->name('Admin.Transport.Store');
Route::get('/admin/Transport/transportList',[TransportController::class,'TransportList'])->name('admin.addtransportList');

//Spot
Route::get('/admin/Spot/Addspot',[SpotController::class,'Addspot'])->name('admin.Addspot');
Route::post('/admin/Spot/StoreSpot',[SpotController::class,'StoreSpot'])->name('admin.StoreSpot');
Route::get('/admin/Spot/SpotList',[SpotController::class,'SpotList'])->name('admin.Spotlist');