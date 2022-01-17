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
                    <h3 class="font-weight-bold">Review List</h3>
                  
               

          
        

                    @if(session()->has('success'))
                            <p class="alert alert-success">
                                {{session()->get('success')}}
</p>
@endif
                    <table class="table">
                        <div class="row">  
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Travler name</th>
                                            <th scope="col">location name</th>
                                            <th scope="col">Spot name</th>
                                            
                                            
                                            <th style="width= 100px 1important;">Review</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($reviews as $key=>$review)
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                        <td>{{$review->user->name}}</td>
                                        <td>{{$review->location->Location_name}}</td>
                                        <td>{{$review->spot->SpotName}}</td>
                                        
                                      
                                        <td class="setWidth concat"><div>{{$review->review}}</div></td>
                                        <td>
                                        <a class="btn btn-primary" href="">View</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <a class="btn btn-primary" href="">Delete</a>
                                        @if($review->status=='pending')
       <a href="{{route('admin.review.approve',$review->id)}}"><span class="ml-2"><i class="fa fa-check-square-o fa-2x"style="color:#4b49ac;" ></i></span></a>
       
       <a href="{{route('admin.review.decline',$review->id)}}"><span class="ml-2"> <i class="fa fa-times fa-2x"style="color:#4b49ac;" ></i></span></a>
       @endif
      </td>
      <td>{{$review->status}}</td>
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
