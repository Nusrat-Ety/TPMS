<?php
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\SpotController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Website\WebsiteBlogController;
use App\Http\Controllers\Website\TourController as WebsiteTourController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Website\WebsiteLocationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|x
*/
//----website-----
//home page
Route::get('/',[HomeController::class,'home'])->name('website');
Route::get('/website/Blog/{id}',[WebsiteBlogController::class,'BlogView'])->name('website.blog');
Route::get('/frontend/login',[UserController::class,'loginView'])->name('user.page.login');
Route::post('/frontend/Registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.dologin');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
//Tourplan
route::get('/tourplan',[WebsiteTourController::class,'TourPlan'])->name('user.tourplan');
route::post('/make/tourplan',[WebsiteTourController::class,'storeTourPlan'])->name('user.added.tourplan');

//location
Route::get('/location/{location_id}',[WebsiteLocationController::class,'LocationSpotView'])->name('website.view.location');

//Blog
Route::get('/AddBlog',[WebsiteBlogController::class,'BlogAdd'])->name('Add.blog');
Route::post('/storeBlog',[WebsiteBlogController::class,'Blogstore'])->name('store.blog');

//search
Route::get('/search',[HomeController::class,'search'])->name('search.website.tourplans');


//-------Admin------

    Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['prefix'=>'admin','middleware'=>['auth','Admin']],function (){
        Route::get('/', function () {
            return view('admin.layouts.index');
        })->name('admin');
        //admin logout
        Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');
//tour controller
Route::get('/MTourP',[TourController::class,'Managetourplan'])->name('manage.Tour.plan');
Route::get('/ManageTourPlanRequest',[TourController::class,'ManagetourplanReq'])->name('admin.manage.TourplanReq');
Route::get('/Tourplan/details/{tourplan_id}',[TourController::class,'TourPlanDetails'])->name('view.tourplan.details');
Route::get('/tourplan/delete/{tourplan_id}',[TourController::class,'DeleteTourPlan'])->name('admin.tourplan.delete');
Route::get('/ManageTourplan/AdminAddedTourlist',[TourController::class,'ViewAdminTourList'])->name('admin.added.TourList');
Route::get('/tourplan/Approve/{tourplan_id}',[TourController::class,'approveTour'])->name('admin.approve.Tour');
Route::get('/tourplan/Decline/{tourplan_id}',[TourController::class,'declineTour'])->name('admin.decline.Tour');

//traveller controller
Route::get('/Managetraveler',[TravelerController::class,'ManageTraveler'])->name('manage.traveler');
Route::get('/TravelerList',[TravelerController::class,'TravelerList'])->name('traveler.List');
Route::get('/admin/addtraveler',[TravelerController::class,'addtraveler'])->name('admin.traveler.addtraveler');
Route::post('/admin/add/travelers',[TravelerController::class,'posttraveler'])->name('admin.traveler.post');

//Transport
Route::get('/admin/Transport/Addtransport',[TransportController::class,'addransport'])->name('admin.addtransportform');
Route::post('/admin/Transport/Storetransport',[TransportController::class,'Storetransport'])->name('Admin.Transport.Store');
Route::get('/admin/Transport/transportList',[TransportController::class,'TransportList'])->name('admin.addtransportList');

//Spot
Route::get('/Spot/Addspot',[SpotController::class,'Addspot'])->name('admin.Addspot');
Route::post('/Spot/StoreSpot',[SpotController::class,'StoreSpot'])->name('admin.StoreSpot');
Route::get('/Spot/SpotList',[SpotController::class,'SpotList'])->name('admin.Spotlist');
Route::get('/view/{spot_id}',[SpotController::class,'SpotDetails'])->name('admin.spot.details');

//blog
Route::get('/admin/blog',[BlogController::class,'Addblog'])->name('admin.add.blog');
Route::post('/admin/StoreBlog',[BlogController::class,'storeBlog'])->name('admin.Store.Blog');
Route::get('/admin/blog/bloglist',[BlogController::class,'BlogList'])->name('admin.blog.blogList');
Route::get('/blog/bloglist/details/{blog_id}',[BlogController::class,'Blogdetails'])->name('admin.blog.details');
Route::get('/blog/delete/{blog_id}',[BlogController::class,'BlogDelete'])->name('admin.delete.blog');
Route::get('/blog/edit/{blog_id}',[BlogController::class,'BlogEdit'])->name('admin.Edit.blog');
Route::put('/blog/update/{blog_id}',[BlogController::class,'BlogUpdate'])->name('admin.update.blog');
Route::get('/blog/Approve/{blog_id}',[BlogController::class,'approveBlog'])->name('admin.approve.blog');
Route::get('/blog/Decline/{blog_id}',[BlogController::class,'declineBlog'])->name('admin.decline.blog');
//location
Route::get('/create/location',[LocationController::class,'createLocation'])->name('admin.create.location');
Route::post('/store/location',[LocationController::class,'storeLocation'])->name('admin.store.location');
Route::get('/location/list',[LocationController::class,'LocationList'])->name('admin.location.list');
Route::get('/location/delete/{location_id}',[LocationController::class,'deletelocation'])->name('admin.location.delete');
Route::get('/location/details/{location_id}',[LocationController::class,'LocationDetails'])->name('admin.location.details');
Route::get('/location/edit/{location_id}',[LocationController::class,'EditLocation'])->name('admin.location.edit');
Route::PUT('/location/update/{location_id}',[LocationController::class,'UpdateLocation'])->name('admin.location.update');


});