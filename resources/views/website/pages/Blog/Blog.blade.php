@extends('website.master')
@section('item')

<!-- <br><br><br><br><br> -->
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('/uploads/Blogs/'.$blogs->Blogimage)}}')">
			<div class="container">
				<div class="about-us-content">
					<!-- <div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful World 

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											explore now
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div>
						</div>
					</div> -->
                                        <h4 style="text-align:right; text-align:left; margin-top: 470px;color: white; font-size: 50px;">{{$blogs->Location}}</h4>
                                        <h3 style="text-align:left; text-align:left;color: seashell; font-size: 32px;">{{$blogs->BlogName}}</h3>
                                        
                                        <h2 style="text-align:left; text-align:end;color: seashell; font-size: 23px;">{{$blogs->BloggerName}}</h2>
                                        <p style="color: white; margin-top:1px;"><span>{{$blogs->Date}}</span></p>
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		        </section>
                    </div> <!-- end of text-container -->
                   <div style="padding-left: 25px; padding-right: 25px; margin-bottom: 70px;">
                    <div class="text-container" style="margin-top: 30px;">
                        <h3 style="padding-bottom: 15px;">Description</h3>
                        <p>{{$blogs->Description}}</p>
                    </div> <!-- end of text-container -->

                    <!--div class="text-container" style="margin-top: 30px;">
                        <h3>License Types & Template Usage</h3>
                        <p>All our templates inherit the GNU general public license from HTML. All .PSD & CSS files are packaged separately and are not licensed under the GPL 2.0. Instead, these files inherit Aria Personal Use License. These files are given to all Clients on a personal use basis. You may not offer them, <a class="green" href="#your-link">modified or unmodified</a>, for redistribution or resale of any kind. You can’t use one of our themes on a HTML domain. More on HTML Vs CSS, you can read here. You can use our templates do develop sites for your clients.</p>
                        <p>Services help our customers promote their products and services, marketing and advertising; engaging audiences; scheduling and publishing messages; and analyze the results.</p>
                    </div--> <!-- end of text-container -->

                    <!--div class="text-container" style="margin-top: 30px;">
                        <h3>Designer Membership And How It Applies</h3>
                        <p>By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent to the collection, transfer, storage disclosure, and use of your Personal Information in the manner set out in this Privacy Policy. If you do not consent to the use of your Personal Information in these ways, please stop using the Services.</p>
                    </div--> <!-- end of text-container -->
                    
                    <!--div class="text-container last" style="margin-top: 30px;">
                        <h3>Assets Used In The Live Preview Content</h3>
                        <p>Aria Landing Page uses tracking technology on the landing page, in the Applications, and in the Platforms, including mobile application identifiers and a unique Hootsuite user ID to help us recognize you across different Services, to monitor usage and web traffic routing for the Services, and to customize and improve the Services. By visiting Aria or using the Services you agree to the use of cookies in your browser and HTML-based emails. Cookies are small text files placed on your device when you visit a <a class="green" href="#your-link">web site</a> in order to track use of the site and to improve your user experience.</p>
                        
                    </div--> <!-- end of text-container -->
                    </div>
                    <a style="text-align:right; text-align:right;" class="btn-outline-reg" href="{{url('/')}}">BACK</a>

                </div>
            </div> <!-- end of row -->
        </div>
<!-- <h1>hello</h1> -->
@endsection