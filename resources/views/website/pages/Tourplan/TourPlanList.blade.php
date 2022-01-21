@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right: 7rem;margin-left: 10rem;">
                <h3 style="padding-bottom: 15px;margin-bottom: 4rem;">[Join Request]</h3>
        
                    <table class="table text-center">
                                            <thead>
                                                <tr >
                                                    <th style=" text-align: center;" scope="col">SL</th>
                                                    <th style=" text-align: center;"scope="col">Tourplan Name</th>
                                                    <th style=" text-align: center;"scope="col">Traveler name</th>
                                                    <th style=" text-align: center;"scope="col">Joined traveler name</th>
                                                    <th style=" text-align: center;"scope="col">Status</th>
                                                    <th style=" text-align: center;" scope="col">Action</th>
        
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                             
                                         
                                              @foreach($tourplans as $key=>$traveler)
                                     @if(auth()->user()->id==$traveler->tourplan->user->id?$traveler->all():auth()->user()->id==$traveler->user->id)
                                              <tr >
                              
                                                <th style=" text-align: center;">{{$key+1}}</th>
                                                <td style=" text-align: center;">{{$traveler->tourplan->Tourname}}</td>
                                                <td style=" text-align: center;">{{$traveler->tourplan->user->name}}</td>
                                                <td style=" text-align: center;">{{$traveler->user->name}}</td>
                                                <td style=" text-align: center;">{{$traveler->status}}</td>
                                                <td style=" text-align: center;">
                                               @if(auth()->user()?auth()->user()->id==$traveler->tourplan->user->id:0)
                                                    <a class="btn btn-primary" href="{{route('request.join.approve',$traveler->id)}}">approve</a>
                                                    <a class="btn btn-primary" href="{{route('request.join.decline',$traveler->id)}}">decline</a>
                                            @endif
                                            @if(auth()->user()->id==$traveler->user->id?$traveler->status=='approved':0)
                                            <a class="btn btn-primary" href="{{route('view.tourplan.user',$traveler->tourplan->id)}}">Tour plan</a>
@endif
<a class="btn btn-primary" href="{{route('website')}}">Back</a>

                                                </td>

                                              </tr>
                                              @endif
                                              @endforeach
                                              
                                           </tbody>
        
                                        </table>
        
        
        
        
          </div>
          </div>
          
@endsection