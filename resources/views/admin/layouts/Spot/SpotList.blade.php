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
                    <h3 class="font-weight-bold">Spot List</h3>
                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <div>
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Spot name</th>
                                            <th scope="col">Spot location</th>
                                            <th scope="col">Spot image</th>
                                            <th scope="col">Spot Details</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                      @foreach($Spots as $key=>$Spot)
                                      <tr>
                      
                                        <th>{{$key+1}}</th>
                                        <td>{{$Spot->SpotName}}</td>
                                        <td>{{$Spot->location->Location_name}}</td>
                                        <td><img src="{{url('/uploads/Spots/'.$Spot->SpotImage)}}" width="200px" alt="Spot image"></td>
                                        <td class="setWidth concat"><div>{{$Spot->SpotDetails}}</div></td>
                                        <td>
                                       
                                            <a class="btn btn-primary" href="{{route('admin.spot.details',$Spot->id)}}">View</a>
                                    
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
