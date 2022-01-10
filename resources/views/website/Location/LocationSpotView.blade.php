@extends('website.master')
@section('item')
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('/uploads/Locations/'.$locations->Location_image)}}')">

<h4 style=" text-shadow: 2px 5.5px black;   background-color: #595757e6; border: solid;   border-color: whitesmoke;text-align:center; margin: auto;color: white; font-size: 50px;">
						{{$locations->Location_name}}
					</h4>
</div>
</div>
</div>

					<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					
					
				<div class="packages-content">
					<div class="row">
                        @foreach($spot as $spot)
                    <div class="col-md-4 col-sm-6">
							<div class="single-package-item" style="height: 500px;">
								<img style="height:200px;"src="{{url('uploads/Spots/'.$spot->SpotImage)}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>{{$spot->SpotName}} <span class="pull-right">{{$spot->location->Location_name}}</span></h3>
									<div class="packages-para">
										<p><i class="fa fa-angle-right"></i>{{$spot->SpotDetails}}	</p>
                                    
									</div><!--/.packages-para-->
									
									<div class="about-btn">
<button class="about-view packages-btn"type="submit" >
											<a href="{{route('user.tourplan')}}">Plan tour</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
@endforeach


                        </div><!--/.row-->
				</div><!--/.packages-content-->
                </div>
                </div>
                </div>
                @endsection