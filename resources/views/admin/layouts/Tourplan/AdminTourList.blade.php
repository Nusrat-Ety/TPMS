@extends('welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Added Tour List</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Tour Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Duration</th>
      <th scope="col">Date</th>
      <th scope="col">Cost</th>
      <th scope="col">Traveler's name</th>
      <th scope="col">traveler_image</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($TourPlans as $Tourplan)
    <tr>
      <th>{{$Tourplan->id}}</th>
      <td>{{$Tourplan->Tourname}}</td>
      <td>{{$Tourplan->TourDestination}}</td>
      <td>{{$Tourplan->TourDuration}}</td>
      <td>{{$Tourplan->TourDate}}</td>
      <td>{{$Tourplan->TourCost}}</td>
      <td>{{$Tourplan->travelar->Fname}}</td>
      <td><img src="{{url('/uploads/'.$Tourplan->image)}}" width="200px" alt="Traveler image"></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection