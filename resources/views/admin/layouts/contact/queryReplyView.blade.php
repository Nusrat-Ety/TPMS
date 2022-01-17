@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Create Blog</h3>

                  @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
    @endif
<br></br>

<form action="{{route('admin.query.reply',$query->id)}}" method="POST">
@method('PUT')
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label style="font-weight:bold;font-size: large;"for="validationCustom01">email : </label>
      <label style="font-size: large;">{{$query->user->email}}</label>
     
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label style="font-weight:bold;font-size: large;"for="validationCustom02">subject : </label>
      <label style="font-size: large;">{{$query->subject}}</label>
     
      </div>
    </div>
   
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label style="font-weight:bold;font-size: large;" for="validationCustom02">Query : </label>
      
      <label style="font-size: large;">{{$query->question}}</label>
      
      </div>
    </div>
    
    
    <div class="form-row">
  <div class="col-md-8 mb-3">
      <label style="font-weight:bold;font-size: large;"for="validationCustomUsername">reply</label>
    
        <textarea style="height: 100px;" name="reply" value="{{$query->reply}}" class="form-control" id="validationCustomUsername" placeholder="reply" aria-describedby="inputGroupPrepend" required></textarea>
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
    </div>
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
      </div>
      
      
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>

</div>
</form>
@endsection