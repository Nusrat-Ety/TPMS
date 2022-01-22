@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right: 7rem;margin-left: 10rem;">
                <h3 style="background-color: #00d8ffeb;text-shadow: 1px 2px 1px #0000006b;padding-bottom: 15px;margin-bottom: 4rem;color: #ffffff;border: outset;">Question/Answer</h3>
        
<table class="table">
                        <div class="row">  
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;"scope="col">SL</th>
                                            <th style="text-align: center;"scope="col">Traveler email</th>
                                            <th style="text-align: center;"scope="col">subject</th>
                                            
                                          
                                            <th style="text-align: center;"style="width= 100px 1important;">Description</th>
                                            <th style="text-align: center;"scope="col">reply</th>
                                            <th style="text-align: center;"scope="col">Action</th>
                                            <th style="text-align: center;"scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($query as $key=>$query)
                                      
                                      <tr>
                                      
                                        <th style="text-align: center;">{{$key+1}}</th>
                                        
                                        
                                        
                                        <td style="text-align: center;">{{$query->user->email}}</td>
                                        <td style="text-align: center;">{{$query->subject}}</td>
                                        <td style="text-align: center;"class="setWidth concat"><div>{{$query->query}}</div></td>
                                        <td style="text-align: center;">
                                        @if(auth()->user()->id != $query->user_id )
                                            @if($query->status=='pending')
                                            <a style="text-align: center;"class="btn btn-primary" href="{{route('admin.view.queryReply',$query->id)}}">reply</a>
                                            
                                           @else
                                            {{$query->reply}}
                                            @endif
                                            @endif
                                        </td>
                                        
                                        <td style="text-align: center;">
                                        <a class="btn btn-primary" href="">View</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <a class="btn btn-primary" href="">Delete</a>
                                      
      <td style="text-align: center;">{{$query->status}}</td>
                                        </td>
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
                               
@endsection