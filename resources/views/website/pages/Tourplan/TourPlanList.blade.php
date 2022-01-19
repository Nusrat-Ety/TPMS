@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right:70rem;border:solid;">
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
                                     
                                              <tr >
                              
                                                <th style=" text-align: center;">{{$key+1}}</th>
                                                <td style=" text-align: center;">{{$traveler->tourplan->Tourname}}</td>
                                                <td style=" text-align: center;">{{$traveler->tourplan->user->name}}</td>
                                                <td style=" text-align: center;">{{$traveler->user->name}}</td>
                                                <td style=" text-align: center;">{{$traveler->status}}</td>
                                                <td style=" text-align: center;">
                                               
                                                    <a class="btn btn-primary" href="{{route('request.join.approve',$traveler->id)}}">approve</a>
                                                    <a class="btn btn-primary" href="">decline</a>
                                            
                                                </td>
                                              </tr>
                                              @endforeach
                                              
                                           </tbody>
        
                                        </table>
        
        
        
        
          </div>
          </div>
          
@endsection