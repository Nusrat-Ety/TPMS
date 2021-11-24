@extends('welcome')
@section('traveler')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Traveler Event List</h3>
                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Traveler Event name</th>
                                            <th scope="col">Traveler Event description</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Event duration</th>
                                            <th scope="col">Event Date</th>
                                            <th scope="col">Deparature time</th>
                                            <th scope="col">Traveler amount</th>
                                            <th scope="col">Event Cost</th>
                                            <th scope="col">Traveler Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($travelarEvents as $travelerevent)
                                      <tr>
                                        <td>{{$travelerevent->id}}</td>
                                        <td>{{$travelerevent->event_name}}</td>
                                        <td>{{$travelerevent->event_description}}</td>
                                        <td>{{$travelerevent->event_destination}}</td>
                                        <td>{{$travelerevent->event_duration}}</td>
                                        <td>{{$travelerevent->event_Date}}</td>
                                        <td>{{$travelerevent->event_deparature_time}}</td>
                                        <td>{{$travelerevent->traveler_amount}}</td>
                                        <td>{{$travelerevent->cost}}</td>
                                        <td>{{$travelerevent->traveler_name}}</td>
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
