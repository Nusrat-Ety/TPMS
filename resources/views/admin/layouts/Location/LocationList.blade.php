@extends('admin.welcome')
@section('contents')
<style>
    .setWidth{
        max-width:100px;
    }
    .concat div{
        overflow:hidden;
        -ms-text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        text-overflow:ellipsis;
        white-space:nowrap;
        width:inherit;
    }
    

    
    </style>
    
<div class="content-wrapper"style="overflow-y:scroll;">

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Location List</h3>
                    @if(session()->has('success'))
  <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
                    <div class="row">
         
                    <table class="table">
                        <div class="row">  
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                          
                                            <th scope="col">Location Name</th>
                                            
                                            <th scope="col">Country</th>
                                            <th scope="col">Location Image</th>
                                          
                                            <th style="width= 100px 1important;">Description</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($locations as $key=>$location)
                                      
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                       
                                        <td>{{$location->Location_name}}</td>

                                        <td>{{$location->Country}}</td>
                                        <td><img src="{{url('/uploads/Locations/'.$location->Location_image)}}" width="200px" alt="location image"></td>
                                        
                                        <td class="setWidth concat"><div>{{$location->LocationDetails}}</div></td>
                                        <td>
                                        <a class="btn btn-primary" href="">View</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <a class="btn btn-primary" href="{{route('admin.location.delete',$location->id)}}">Delete</a>
                                        </td>
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
