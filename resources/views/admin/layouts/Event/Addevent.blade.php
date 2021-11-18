@extends('welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Event Create</h3>
<form action="{{route('admin.Event.create')}}" method="POST">
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Event name</label>
      <input name="name" class="form-control" id="validationDefault01" placeholder="Event name"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Event description</label>
      <input name="description" class="form-control" id="validationDefault02" placeholder="describe your event"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Destination</label>
      <input name="destination" class="form-control" id="validationDefault02" placeholder="destination" required>
    </div>
    </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Event duration</label>
      <input name="duration" class="form-control" id="validationDefault03" placeholder="duration" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Event Date</label>
      <input name="Date" class="form-control" id="validationDefault04" placeholder="date" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Deparature time</label>
      <input name="deparature_time" class="form-control" id="validationDefault05" placeholder="time" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Traveler amount</label>
      <input name="traveler_amount" class="form-control" id="validationDefault05" placeholder="person amount" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Event Cost</label>
      <input name="cost" class="form-control" id="validationDefault05" placeholder="cost" required>
    </div>
  </div>
  <div class="form-group">
    
         <div class="col-md-3 mb-3">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
         Agree to terms and conditions
        </label>
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>
</div>
</div>
@endsection

