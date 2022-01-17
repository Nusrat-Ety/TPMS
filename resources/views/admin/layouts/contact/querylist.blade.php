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
                    <h3 class="font-weight-bold">Blog List</h3>
                  
                   

          
        

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
                                            <th scope="col">Traveler email</th>
                                            <th scope="col">subject</th>
                                            
                                          
                                            <th style="width= 100px 1important;">Description</th>
                                            <th scope="col">reply</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($query as $key=>$query)
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                        
                                        
                                        <td>{{$query->user->email}}</td>
                                        <td >{{$query->subject}}</td>
                                        <td class="setWidth concat"><div>{{$query->question}}</div></td>
                                        <td>
                                            @if($query->status=='pending')
                                            <a class="btn btn-primary" href="{{route('admin.view.queryReply',$query->id)}}">reply</a>
                                            
                                           @else
                                            {{$query->reply}}
                                            @endif
                                        </td>
                                        
                                        <td>
                                        <a class="btn btn-primary" href="">View</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <a class="btn btn-primary" href="">Delete</a>
                                      
      <td>{{$query->status}}</td>
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
