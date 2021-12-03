@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Tour Plan Create</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
<form action="{{route('Admin.Tourplan.Store')}}" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Tour Name</label>
      <input name="TourName" class="form-control" id="validationCustom01" placeholder="Tour Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Destination</label>
      <input name="TourDestination" class="form-control" id="validationCustom02" placeholder="Destination"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Duration</label>
    
        <input name="TourDuration" class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date</label>
      <input name="TourDate" class="form-control" id="validationCustom03" placeholder="Date" required>
      <div class="valid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Cost</label>
      <input name="TourCost" class="form-control" id="validationCustom04" placeholder="Cost" required>
      <div class="valid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Traveler's name</label>
      <select name="Travelar_name" class="form-control" id="exampleFormControlSelect1"required>
      <div class="valid-feedback">
                @foreach ($Travelars as $Travelar)
                    <option value="{{$Travelar->id}}">{{$Travelar->first_name}}</option>
                @endforeach

                Please provide a valid zip.
            </select>
       
</div>
      </div>
      </div>
      </div>
      <div class="form-row">
      <div class="col-md-3 mb-2">
      <label for="" class="form-label">Traveler image</label>
      <input name="image" placeholder="Enter Traveler image" type="file" class="form-control" id="">
  </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
      </div>
      
  
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>
</div>
</div>
</form>
@endsection

