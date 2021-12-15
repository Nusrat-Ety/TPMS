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
                                            <th scope="col">Spot name</th>
                                            <th scope="col">Spot location</th>
                                            <th scope="col">Spot image</th>
                                            <th style="width= "100px 1important;">Spot Details</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Spots as $key=>$Spot)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$Spot->SpotName}}</td>
                                        <td>{{$Spot->SpotLocation}}</td>
                                        <td><img src="{{url('/uploads/Spots/'.$Spot->SpotImage)}}" width="200px" alt="Spot image"></td>
                                        <td>{{$Spot->SpotDetails}}</td>
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
