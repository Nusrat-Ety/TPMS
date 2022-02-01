<?php

namespace App\Http\Controllers\Admin;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function reviewlist(){
        $reviews=Review::with('user')->get();
        return view('admin.layouts.Review.reviewlist',compact('reviews'));
    }
    public function ApproveReview($review_id){
        $review=Review::find($review_id);
        if($review){
        $review->update([
            'status'=>'approved'
        ]);
        return redirect()->back()->with('msg','review has been approved.');
    }
    return redirect()->back();
}
public function DeclineReview($review_id){
    $review=Review::find($review_id);
    
    if($review)
    {
        $review->update([
            'status'=>'decline'
            
        ]);
        
        // $TourPlans=AddTourPlan::find($tourplan_id)->delete();
        return redirect()->back()->with('error','Review has been declined');
    }
    return redirect()->back();

}
    //report spot
    public function reviewReportshow(){
        $reviews=Review::all();
        return view('admin.layouts.Review.Review-report',compact('reviews'));
    }
    public function reviewReport(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);


        $reviews=Review::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.Review.Review-report',compact('reviews'));

    }
}
