@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Spot List</h3>
                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Blog name</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Blogger Name</th>
                                            <th scope="col">Blog Image</th>
                                            <th scope="col">Second Blog Image</th>
                                            <th scope="col">Third Blog Image</th>
                                            <th style="width= 100px 1important;">Description</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Blogs as $key=>$blog)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$blog->BlogName}}</td>
                                        <td>{{$blog->Location}}</td>
                                        <td>{{$blog->Date}}</td>
                                        <td>{{$blog->BloggerName}}</td>
                                        <td><img src="{{url('/uploads/Blogs/'.$blog->Blogimage)}}" width="200px" alt="Blog image"></td>
                                        <td><img src="{{url('/uploads/Blogs/'.$blog->SecondBlogimage)}}" width="200px" alt="Blog image"></td>
                                        <td><img src="{{url('/uploads/Blogs/'.$blog->ThirdBlogimage)}}" width="200px" alt="Blog image"></td>
                                        <td>{{$blog->Description}}</td>
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
