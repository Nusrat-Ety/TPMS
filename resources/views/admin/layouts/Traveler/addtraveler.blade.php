@extends('admin.welcome')
@section('traveler')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Add Traveler</h3>
                    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
                    <form action="{{route('admin.traveler.post')}}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" name="Fname" class="form-control" id="validationCustom01" placeholder="First name"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" name="Lname" class="form-control" id="validationCustom02" placeholder="Last name"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="validationEmail" placeholder="emailid"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please give a valid email.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" name="City" class="form-control" id="validationCustom03" placeholder="City"
                                    required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Contact Number</label>
                                <input name="Contactnumber" type="text" class="form-control" id="validationCustom05"
                                    placeholder="mobile number" required>

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Nationality</label>
                                <input name="Nationality" type="text" class="form-control" id="validationCustom04"
                                    placeholder="Nationality" required>

                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="validationCustom04">NID/BirthCertificate ID/Passposrt ID/Driving
                                    license</label>
                                <input name="NID" type="text" class="form-control" id="validationCustom04"
                                    placeholder="Any ID number" required>

                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Emergency Contact Number</label>
                                <input name="Econtact" type="number" class="form-control" id="validationCustom05"
                                    placeholder="Emergency number" required>

                            </div>
                        </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="validCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>

                    <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>




            @endsection
