@extends('admin.welcome')
@section('traveler')
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
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Contact_Number</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">NID/BirthCertificate_ID/Driving license</th>
                                            <th scope="col">Emergency_contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($travelars as $traveler)
                                      <tr>
                                        <th>{{$traveler->id}}</th>
                                        <td>{{$traveler->first_name}}</td>
                                        <td>{{$traveler->last_name}}</td>
                                        <td>{{$traveler->email}}</td>
                                        <td>{{$traveler->city}}</td>
                                        <td>{{$traveler->contact_number}}</td>
                                        <td>{{$traveler->natinality}}</td>
                                        <td>{{$traveler->NID}}</td>
                                        <td>{{$traveler->Emergency_contact}}</td>
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
