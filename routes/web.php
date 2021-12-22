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
//Route::post



//-------Admin------

    Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
        Route::get('/', function () {
            return view('admin.layouts.index');
        })->name('admin');
        //admin logout
        Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');
//tour controller
Route::get('/MTourP',[TourController::class,'Managetourplan'])->name('manage.Tour.plan');
Route::get('/managetour/Addtourplan',[TourController::class,'addtourplan'])->name('admin.addTourplan');
Route::get('/ManageTourPlanRequest',[TourController::class,'ManagetourplanReq'])->name('admin.manage.TourplanReq');
Route::get('/ViewTourPlan',[TourController::class,'Viewtourplan'])->name('view.tour.plan');
Route::get('/ManageTourplan/AdminAddedTourlist',[TourController::class,'ViewAdminTourList'])->name('admin.added.TourList');
Route::post('/StoreTourplan',[TourController::class,'StoreTourplan'])->name('Admin.Tourplan.Store');

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
Route::get('/admin/Spot/Addspot',[SpotController::class,'Addspot'])->name('admin.Addspot');
Route::post('/admin/Spot/StoreSpot',[SpotController::class,'StoreSpot'])->name('admin.StoreSpot');
Route::get('/admin/Spot/SpotList',[SpotController::class,'SpotList'])->name('admin.Spotlist');

//blog
Route::get('/admin/blog',[BlogController::class,'Addblog'])->name('admin.add.blog');
Route::post('/admin/StoreBlog',[BlogController::class,'storeBlog'])->name('admin.Store.Blog');
Route::get('/admin/blog/bloglist',[BlogController::class,'BlogList'])->name('admin.blog.blogList');
//});
});