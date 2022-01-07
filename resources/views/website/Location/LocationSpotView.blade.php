@extends('website.master')
@section('item')
<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						{{$locations->Location_name}}
					</h2>
					
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