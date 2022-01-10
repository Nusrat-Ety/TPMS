<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Add Blog</title>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{url('frontend/Tourplan/css/bootstrap.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{url('frontend/Tourplan/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section" style="background-image: url('{{url('image/blog-tour.jpg')}}');">
		<div class="section-center">
          
			<div class="container">
				<div class="row">
					<div class="col-md-7 "style="right:150px;">
						<div class="booking-cta">
							<h1>Add Blog</h1>
							<p>
                                Add blog about Locations, Spots, or journey Experience in a location or spot.
    </p><p>Make your tour and Share your Journey Experience with others.
							</p>
						</div>
					</div>
					@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					<div class="col-md-4 col-md-pull-7"style="width:470px;right:150px;">
						<div class="booking-form"style="background-color: #0000006e;">
							<form action="{{route('user.added.tourplan')}}" method="POST">
								@csrf
								
									
                            <div class="form-group">
                            <div class="col-12">
									<label class="form-label">Blog Name</label>
									<input class="form-control" name="BlogName" type="text" placeholder="Enter a destination or hotel name">
								</div>
								</div>
								
									
								<div class="row">
                                <div class="col-sm-7">
                                    <label class="form-label">Blogger name</label>
                                <select class="form-control"name="username">
											 @foreach ($user as $user)
											 @if($user->role=='user')
												<option value="{{$user->id}}">{{$user->name}}</option>
												@endif
												@endforeach
												</select>
											<span class="select-arrow"></span> 
    </div>
    
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Location</span>
											<select class="form-control"name="Location">
											 @foreach ($location as $location)
											 
												<option value="{{$location->id}}">{{$location->Location_name}}</option>
												@endforeach
												</select>
										</div>
									</div>
		
								</div>
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Date</span>
											<input class="form-control"name="Date" type="date" required>
										</div>
									</div>
									
								

								
									
									
                                            <div class="col-sm-7">
										<div class="form-group">
											<span class="form-label">Blog image</span>
											<input class="form-control" name="BlogImagefile"type="file" required>
                                           
										</div>
									</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Blog image (2)</span>
                                    <input class="form-control" name="SecondBlogImagefile"type="file" >
                                         
											</div>
                                            </div>
                                            <div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Blog image (3)</span>
                                            <input class="form-control" name="ThirdBlogImagefile"type="file" >
											</div>
                                            </div>

                                            </div>
                                            <div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Description</span>
                                            <textarea style="width: 397px; height: 120px;" class="form-control" name="Description"type="text" width="400px" required></textarea>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>