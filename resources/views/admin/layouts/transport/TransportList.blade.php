@extends('welcome')
@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Traveler</h3>
                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Transport name</th>
                                            <th scope="col">Transport Type</th>
                                            <th scope="col">location</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Transports as $key=>$transport)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$transport->transportName}}</td>
                                        <td>{{$transport->transportType}}</td>
                                        <td>{{$transport->location}}</td>
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
