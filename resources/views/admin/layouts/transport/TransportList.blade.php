@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Traveler</h3>

                    <!-- search button -->
                    <ul class="navbar-nav mr-lg-4">
                        
                        <form action="{{route('admin.addtransportList')}}" method='get'>
                       
                        
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search"style="display: contents;">
                        
                    <button class="btn" type="submit"><i class="icon-search" ></i></button>
                    </span>
                  </div>
                  
                 
                  <input type="text" name="search" value="{{$key}}"class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
         
              </li>
    </form>  
            </ul>           
</div>
</div>
@if($key)
    <p style="text-align: center;">You are searching for: {{$key}}. Found {{$Transports->count()}} results.<span><a href="{{route('admin.addtransportList')}}">Go to List</a></span></p>

@endif


                    <table class="table">
                        <div class="row">
                            
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Transport name</th>
                                            <th scope="col">Transport Type</th>
                                            <th scope="col">location</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Transports as $key=>$transport)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$transport->transportName}}</td>
                                        <td>{{$transport->transportType}}</td>
                                        <td>{{$transport->location}}</td>
                                        <td>
                                            <a class="btn btn-primary"href="">view</a>
                                        </td>
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
