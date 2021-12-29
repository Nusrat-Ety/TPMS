<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //Admin blog add
    public function Addblog(){
        return view('admin.layouts.blog.AddBlog');
    }
    public function storeBlog(Request $request){
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
            $file->storeAs('/uploads/Blogs/',$SecondBlogImagefile);
        }
        $ThirdBlogImagefile='';
        if($request->hasFile('ThirdBlogImage')){
            $file=$request->file('ThirdBlogImage');
            $ThirdBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/',$ThirdBlogImagefile);
        }
        Blog::create([
            'BlogName'=>$request->BlogName,
            'Location'=>$request->Location,
            'Date'=>$request->Date,
            'BloggerName'=>$request->blogger_name,
            'Blogimage'=>$BlogImagefile,
            'SecondBlogimage'=>$SecondBlogImagefile,
            'ThirdBlogimage'=>$ThirdBlogImagefile,
            'Description'=>$request->Description

        ]);
        return redirect()->back()->with('msg','Blog created Successfully');
    }
    public function BlogList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Blogs=Blog::where('BlogName','LIKE','%'.$key.'%')->orwhere('Location','LIKE','%'.$key.'%')->orwhere('BloggerName','LIKE','%'.$key.'%')->get();
            return view('admin.layouts.blog.BlogList',compact('Blogs','key'));
            
        }
        
    
        $Blogs=Blog::all();
        return view('admin.layouts.blog.BlogList',compact('Blogs','key'));

    }
    public function Blogdetails($blog_id){
        $blog=Blog::find($blog_id);
        return view('admin.layouts.blog.Blogdetails',compact('blog'));

    }
    public function BlogDelete($blog_id){
        $blog=Blog::find($blog_id)->delete();
        return redirect()->back()->with('success','Blog deleted Successfully.');

    }
    public function BlogEdit($blog_id){
        $blog=Blog::find($blog_id);
        return view('admin.layouts.blog.BlogEdit',compact('blog'));

    }
    public function BlogUpdate(Request $request,$blog_id){
        $blog=Blog::find($blog_id);
        $blogimage=$blog->Blogimage;
        if($request->hasFile('BlogImagefile'))
        {
$blogimage=date('Ymdhis').'.'.$request->file('BlogImagefile')->getClientOriginalExtension();
$request->file('BlogImagefile')->storeAs('/uploads/Blogs',$blogimage);
        }
        $secondblogimage=$blog->SecondBlogimage;
        if($request->hasFile('SecondBlogimage')){
            $secondblogimage=date('Ymdhis').'.'.$request->file('SecondBlogimage')->getClientOriginalExtension();
            $request->file('SecondBlogimage')->storeAs('/uploads/Blogs',$secondblogimage);
        }
        $thirdblogimagefile=$blog->ThirdBlogimage;
        if($request->hasFile('ThirdBlogImagefile')){
            $thirdblogimagefile=date('Ymdhis').'.'.$request->file('ThirdBlogImagefile')->getClientOriginalExtension();
            $request->file('ThirdBlogImagefile')->storeAs('/uploads/Blogs',$thirdblogimagefile);
        }

       $blog->update([
        'BlogName'=>$request->BlogName,
        'Location'=>$request->Location,
        'Date'=>$request->Date,
        'BloggerName'=>$request->blogger_name,
        'Blogimage'=>$blogimage,
        'SecondBlogimage'=>$secondblogimage,
        'ThirdBlogimage'=>$thirdblogimagefile,
        'Description'=>$request->Description

       ]);
       return redirect()->route('admin.blog.blogList')->with('success','blog updated successfully');
    }

}
