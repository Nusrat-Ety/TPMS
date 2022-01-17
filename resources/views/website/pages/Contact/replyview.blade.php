@extends('website.master')
@section('item')

<div class="container">
@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					
                               
									
								
<br></br>
<br></br>
<br></br>
<div class=row>
@foreach($query as $query)
@if(auth()->user()->id==$query->user_id)
    <div class=col-md-4>
                                <div class="card" style="width: 18rem;">
  <div class="card-body"style="border:solid;">
    <h5 class="card-title">{{$query->user->email}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$query->subject}}</h6>
    <p class="card-text">{{$query->question}}</p>
    
    <p class="card-text">{{$query->reply}}</p>
    
  </div>
</div>
							
								
                
                                   
                          
						</div>
                        @endif
                         @endforeach
					</div>
                   
                    
					</div>
					
@endsection