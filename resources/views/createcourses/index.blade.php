@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Trending Courses</h1>
    <br>
    <br>

    <div class="card-columns">

    @if(count($createcourses) > 0)
        @foreach($createcourses as $createcourse)
            <div class="card" style="width: 18rem;height:350px;">
                    <img class="card-img-top" style="height:170px" src="/storage/cover_images/{{$createcourse->cover_image}}" alt="Card image cap">
                
                    {{-- <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div> --}}
                    <div class="card-body">
                        <h3 class="card-title"><a href="/createcourses/{{$createcourse->id}}">{{$createcourse->title}}</a></h3>
                        <small class="card-text" >{{$createcourse->body}}</small>
                        <br>
                        <a href=" /createcourses/{{$createcourse->id}}" class="btn btn-primary" style="margin-top:10px; align-content: center;  ">Enroll Now</a>
                    </div>
            </div>
        @endforeach
        
        {{$createcourses->links()}}
    </div>
        {{-- {{$posts->links()}} --}}
    @else
        <p>No Courses found</p>
    @endif
</div>
@endsection