<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Location;


class WebsiteBlogController extends Controller
{
   public function BlogView($id){
    //    dd($id);
    $blogs = Blog::find($id);
    //  dd($blogs);
    if ($blogs) {
        return view('website.pages.blog.Blog',compact('blogs'));
    }

    else
    return "Blog not found!";
       
    }
    public function BlogAdd(){
        $user=User::all();
        $location=Location::all();
        
        return view('website.pages.Blog.UserAddBlog',compact('user','location'));
    }
    public function Blogstore(Request $request){

        $request->validate([
            'Date'=>'after_or_equal:today',
            'Description'=>'required'|'string',
            'BlogName'=>'required'|'string',
            'BlogImagefile'=>'required'
           
        ]);
        $BlogImagefile='';
        if($request->hasFile('BlogImage')){
            $file=$request->file('BlogImage');
            $BlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/',$BlogImagefile);
        }
        $SecondBlogImagefile='';
        if($request->hasFile('SecondBlogImage')){
            $file=$request->file('SecondBlogImage');
            $SecondBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/secondimage/',$SecondBlogImagefile);
        }
        $ThirdBlogImagefile='';
        if($request->hasFile('ThirdBlogImage')){
            $file=$request->file('ThirdBlogImage');
            $ThirdBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/thirdimage/',$ThirdBlogImagefile);
        }
        Blog::create([
            'BlogName'=>$request->BlogName,
            'location_id'=>$request->Location,
            'Date'=>$request->Date,
            'user_id'=>$request->blogger_name,
            'Blogimage'=>$BlogImagefile,
            'SecondBlogimage'=>$SecondBlogImagefile,
            'ThirdBlogimage'=>$ThirdBlogImagefile,
         
            'Description'=>$request->Description,
            'Description2'=>$request->Description2,
            'Description3'=>$request->Description3

        ]);
        return redirect()->back()->with('msg','Blog created Successfully');
    }
    public function ViewBlogUser(){
        $Blogs=Blog::with('user','location')->where('status','approved')->get();
        // dd($tourplans);
        return view('website.pages.home',compact('Blogs'));

    }

    //user blog list show
    public function MyBlogList(){
        $blogs=Blog::with('user','location')->where('user_id',auth()->user()->id)->get();
        // dd($joinedplan);
        return view('website.pages.Blog.My-blog-list',compact('blogs'));
    }
    }

    

