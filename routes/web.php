<?php
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\SpotController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AdminReviewController;
//---website---//
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\JoinController;
use App\Http\Controllers\Website\WebsiteBlogController;
use App\Http\Controllers\Website\TourController as WebsiteTourController;
use App\Http\Controllers\Website\WebsiteLocationController;
use App\Http\Controllers\Website\ReviewController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\SearchController;


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

//location
Route::get('/location/{location_id}',[WebsiteLocationController::class,'LocationSpotView'])->name('website.view.location');

Route::group(['middleware'=>'check_user'],function (){
//Tourplan
route::get('/tourplan',[WebsiteTourController::class,'TourPlan'])->name('user.tourplan');
route::post('/make/tourplan',[WebsiteTourController::class,'storeTourPlan'])->name('user.added.tourplan');
route::get('/view/tourplan/{tourplan_id}',[WebsiteTourController::class,'ViewTourPlanDetails'])->name('view.tourplan.user');
route::get('/view/tourplan-list',[WebsiteTourController::class,'viewTourList'])->name('tourplan.list');

// route::get('/view/joined-details/{tourplan_id}',[WebsiteTourController::class,'JoinedUserDetails'])->name('view.tourplan.user');



//Blog
Route::get('/AddBlog',[WebsiteBlogController::class,'BlogAdd'])->name('Add.blog');
Route::post('/storeBlog',[WebsiteBlogController::class,'Blogstore'])->name('store.blog');


//Query
route::get('/query/{tourplan_id}',[ContactController::class,'QueryView'])->name('user.query');
route::post('/store/query',[ContactController::class,'QueryStore'])->name('user.query.store');
route::get('/query/reply',[ContactController::class,'replyview'])->name('reply.show');

//review

route::get('/review',[ReviewController::class,'addreview'])->name('user.review');
route::post('/review/store',[ReviewController::class,'storereview'])->name('user.store.review');


//join
Route::get('/join/{join_request_id}',[JoinController::class,'JoinRequest'])->name('request.Join');
Route::get('/join/view/{join_request_id}',[JoinController::class,'viewJoin'])->name('request.Join.view');
Route::get('/join/request/approved/{join_request_id}',[JoinController::class,'joinApprove'])->name('request.join.approve');
Route::get('/join/request/decline/{join_request_id}',[JoinController::class,'joinDecline'])->name('request.join.decline');

//search
route::get('/search',[SearchController::class,'search'])->name('search.plan');
});

//-------Admin------//

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

//query
route::get('/querylist',[AdminContactController::class,'querylist'])->name('admin.query.list');
Route::get('/query/replyView/{query_id}',[AdminContactController::class,'ViewqueryReply'])->name('admin.view.queryReply');
Route::put('/query/reply/{query_id}',[AdminContactController::class,'queryReply'])->name('admin.query.reply');

//review
Route::get('/user-review',[AdminReviewController::class,'reviewlist'])->name('admin.review.list');
Route::get('/user-review/approve/{review_id}',[AdminReviewController::class,'ApproveReview'])->name('admin.review.approve');
Route::get('/user-review/decline/{review_id}',[AdminReviewController::class,'DeclineReview'])->name('admin.review.decline');

});