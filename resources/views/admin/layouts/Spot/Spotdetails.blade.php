@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Spot Details</h3>

    <p>
        <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/Spots/'.$spot->SpotImage)}}" alt="product">
    </p>
<p style="font-weight:bold;">Spot Name: {{$spot->SpotName}}</p>
<p>Spot Details: {{$spot->SpotLocation}}</p>
<p>Spot Status: {{$spot->SpotDetails}}</p>
</div>
</div>
</div>
</div>

@endsection