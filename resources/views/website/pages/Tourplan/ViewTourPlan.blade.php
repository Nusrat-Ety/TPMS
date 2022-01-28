

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
                   
                        <h3 style="padding-bottom: 15px;">About Tour Plan</h3>
                        <p>{{$tourplan->Tourname}}</p>
					<div>
					<div>

</div>
<div class="gallary-header text-center">
				
                    <div class="text-container" style="margin-top: 30px;margin-right:70rem;border:solid;">
                   
                        <h3 style="padding-bottom: 15px;">{{$tourplan->spot->SpotName}} | {{$tourplan->location->Location_name}}</h3>
                        <p><span style="color:black;background-color:#00d8ff7a;">Tour name :</span>{{$tourplan->Tourname}}</p>
                        <p><span style="color:black;background-color:#00d8ff7a;">Tour From :</span>{{$tourplan->from}}</p>
                        <p><span style="color:black;background-color:#00d8ff7a;">Tour Duration :</span>{{$tourplan->TourDuration}}</p>
                        <p><span style="color:black;background-color:#00d8ff7a;">Tour Date :</span>{{$tourplan->TourDate}}</p>
                        <p><span style="color:black;background-color:#00d8ff7a;">Tour Budget :</span>{{$tourplan->TourBudget}}</p>
  </div>
  </div>
  @if(auth()->user()?auth()->user()->id==$tourplan->user->id:0)  
          <div class="gallary-header text-center">
				
        <div class="text-container" style="margin-top: 30px;margin-right:70rem;border:solid;">
        <h3 style="padding-bottom: 15px;">[Join Request]</h3>
            <h3 style="padding-bottom: 15px;">{{$tourplan->spot->SpotName}} | {{$tourplan->location->Location_name}}</h3>

            <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Traveller Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                 
                                      @foreach($tourplan->travelers as $key=>$traveler)
                                     
                                      <tr>
                      
                                        <th>{{$key+1}}</th>
                                        <td>{{$traveler->user->name}}</td>
                                        <td>{{$traveler->status}}</td>
                                    
                                        <td>
                                       
                                            <a class="btn btn-primary" href="">approve</a>
                                            <a class="btn btn-primary" href="">decline</a>
                                    
                                        </td>
                                      </tr>
                                      @endforeach
                                      
                                   </tbody>

                                </table>




  </div>
  </div>
  @endif
<div class="card" style="width: 28rem;height:28rem;margin-left: 1000px;margin-top: -155px; box-shadow: 2px 2px 4px black;height: max-content;background-color:#e7ffff;">
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
  
<ul>
<a class="btn btn-default" href="{{route('query.list.view')}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Question/Answer</a>


    <a class="btn btn-default" href="{{route('user.query',$tourplan->id)}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Ask Us</a>

    <p class="card-text">
      Please pay advance 10% amount of your budget for your join confirmation.
    </p>
    <a class="btn btn-default" href="{{route('advance.pay')}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Advance payment</a>

  </ul>
  </ul>
    <!-- <li class="list-group-item"></li> -->
    
 

       
</section>


@endsection