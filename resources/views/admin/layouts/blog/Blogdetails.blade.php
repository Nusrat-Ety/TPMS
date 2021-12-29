@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Blog Details</h3>

    <p>
        <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/Blogs/'.$blog->Blogimage)}}" alt="Blog">
    </p>
<p style="font-weight:bold;">Blog Name: {{$blog->BlogName}}</p>
<p>Location: {{$blog->Location}}</p>
<p>Blogger Name: {{$blog->BloggerName}}</p>
<div class="images-container">



        <img style="border-radius: 4px;" width="300px;" src=" {{url('/uploads/Blogs/'.$blog->SecondBlogimage)}}" alt="Blog">
    




        <img style="border-radius: 4px;" width="300px;" src=" {{url('/uploads/Blogs/'.$blog->ThirdBlogimage)}}" alt="Blog">
        </div>

<p>Blog Description: {{$blog->Description}}</p>
<p>Date: {{$blog->Date}}</p>

</div>
</div>
</div>
</div>

@endsection