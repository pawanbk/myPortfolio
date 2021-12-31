@extends('layouts.master')
@section('content')
    <h4 class="mt-2">Personal details</h4>
    <form method="post" action="{{route('admin.profile.update',$personaldata->id)}}" enctype="multipart/form-data">
        @csrf
        <section>
            <div class="form-row mb-2"> 
                <label for="" class="lead">Full name</label>
                <input type="text" class="form-control" name="full_name" placeholder="Name" value="{{$personaldata->full_name}}"> 
            </div>
            <div class="form-row mb-2"> 
                <label for="" class="lead">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{$personaldata->email}}"> 
            </div>
            <div class="form-row mb-2"> 
                <label for="" class="lead">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{$personaldata->phone}}"> 
            </div>
            <div class="form-row"> 
                <label for="" class="lead">Profile</label>
                <input type="text" class="form-control" name="profile" placeholder="Profile" value="{{$personaldata->profile}}"> 
            </div>
            <div class="form-row">
                <label for="" class="lead">Select Profile image</label>
                <img src="{{url('storage/profile/'.$personaldata->profile_image)}}">
                <input type="file" name="profile_image" class="mt-2">
            </div>
            <div class="form-row">
                <input type="submit" value="update" class="btn w-100">
            </div>
        </section>
    </form>

    
    <form method="POST" action="{{route('admin.sitesetting.update', $sitedata->id)}}" enctype="multipart/form-data">
        @csrf
        <section class="mt-4">
            <h4>Site details</h4>    
            <div class="form-row mb-3"> 
                <p class="lead fw-700">Hero image:</p>
                <img src="{{url('storage/hero_image/'.$sitedata->hero_img)}}">
                <input type="file"  name="heroImage" class="mt-2"> 
            </div>
            <div class="form-row mb-3"> 
                <p class="lead">Resume</p>
                <a href="{{url('storage/resume/'.$sitedata->resume)}}" style="color:blue;" class="mb-2"><i class="fa fa-arrow-down"></i>Download</a>
                <input type="file" name="resume" class="mb-2">  
            </div>
            <div class="form-row mb-3"> 
                <label for=""> Heading 1</label>
                <input type="text" class="form-control" placeholder="Title 1" name="title" value="{{$sitedata->title}}"> 
            </div>
            <div class="form-row mb-3"> 
                <label for=""> Heading 2</label>
                <input type="text" class="form-control" placeholder="Title 2" name="sub_title" value="{{$sitedata->sub_title}}"> 
            </div>
            <div class="form-row mb-3"> 
                <label for="">Write short description about you</label>
                <input type="text" class="form-control" placeholder="write a short description" name="about_1" value="{{$sitedata->about_desc1}}"> 
            </div>
            <div class="form-row mb-3"> 
                <label for="">Write more about you</label>
                <input type="text" class="form-control" placeholder="write a description about you" name="about_2" value="{{$sitedata->about_desc2}}"> 
                <div id="ckeditor"></div>
            </div>
            <div class="form-row"> 
                <input type="submit" value="Update" class="btn btn-info w-100"> 
            </div>
        </section>
    </form>
    <script>
    ClassicEditor
    .create( document.querySelector( '#ckeditor' ) )
    .catch( error => {
    console.error( error );
    });
    </script>

@endsection