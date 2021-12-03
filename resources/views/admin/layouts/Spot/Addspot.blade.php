@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Spot Create</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
<form action="{{route('admin.StoreSpot')}}" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Spot name</label>
      <input name="SpotName" class="form-control" id="validationCustom01" placeholder="Tour Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Spot location</label>
      <input name="SpotLocation" class="form-control" id="validationCustom02" placeholder="spot location"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Spot Image</label>
    
        <input name="SpotImage" class="form-control"  type="file" id="" placeholder="image">
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
  
  <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Spot details</label>
    
        <input name="Spotdetail" class="form-control" id="validationCustomUsername" placeholder="detail" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
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
      
      </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>
</div>
</div>
</form>
@endsection

