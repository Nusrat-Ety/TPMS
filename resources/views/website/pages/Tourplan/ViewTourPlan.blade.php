

@extends('website.master')
@section('item')
<style>
    
    a:hover{
    transform:scale(1.5);
    }
    </style>




<!-- <br><br><br><br><br> -->
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('uploads/Spots/'.$tourplan->spot->SpotImage)}}');">
			
			
</div>
</div>
</div>
<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
				
                    <div class="text-container" style="margin-top: 30px;">
                   
                        <h3 style="padding-bottom: 15px;">Description</h3>
                        <p>{{$tourplan->Tourname}}</p>
					<div>
					<div>

</div>


<div class="card" style="width: 28rem;margin-left: 1000px;margin-top: -155px; box-shadow: 2px 2px 4px black;height: 28rem;background-color:#e7ffff;">
  <!-- <img
    src="https://mdbcdn.b-cdn.net/img/new/standard/city/062.webp"
    class="card-img-top"
    alt="Chicago Skyscrapers"
  /> -->
  <div class="card-body">
    <h5 class="card-title"style="font-size: 23px; text-shadow: 2px 2px 2px #00000047;">Join Request</h5>
    <p class="card-text">
      If you want to join in the tour, please select the join button.For the traveler detail select the traveler profile.
    </p>
  </div>
  <ul class="list-group list-group-flush">
    <a class="btn btn-default"style="width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Join Tour</a>
</ul>
    <!-- <li class="list-group-item"></li> -->
    <ul>
    <a class="btn btn-default"style="width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Traveler Profile</a>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>

       
</section>


@endsection