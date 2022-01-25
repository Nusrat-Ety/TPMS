@extends('admin.welcome')
@section('traveler')
<style>
a:hover i {
            transform: scale(1.5);
        }
        .setWidth{
        max-width:100px;
    }
    .concat div{
        overflow:hidden;
        -ms-text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        text-overflow:ellipsis;
        white-space:nowrap;
        width:inherit;
    }

    
    </style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Traveler</h3>
                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Travelers Name</th>
                                          
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Contact Number</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Date of Birth</th>
                                            <th scope="col">National Identity Card</th>
                                            <th scope="col">Actions</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($travelers as $key=>$traveler)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$traveler->name}}</td>
                                        
                                        <td>{{$traveler->email}}</td>
                                        <td>{{$traveler->Address}}</td>
                                        <td>{{$traveler->mobile}}</td>
                                        <td>{{$traveler->Gender}}</td>
                                        <td>{{$traveler->DOB}}</td>
                                        <td>{{$traveler->NID}}</td>
                                        <td>
                                        <a  href=""><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href=""><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       <a href=""><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
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
