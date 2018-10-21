@extends('layouts.app')

@section('content')

<style>
    .p1 {border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background: #012b72;
    text-align: center;
    height: 200px; }
</style>

<div class="jumbotron text-center">
        
   <div class="jumbotron p-3 p-md-5 text-white rounded" style="background-color: #012b72">
  
    <h1>{{$createcourse->title}}</h1>
    <h2>{{$createcourse->body}}</h2>    
   </div>
  
    <h2>1. {{$createcourse->vid1}}</h2>
    <video width="400" height="280" controls>
        <source src="/storage/videos/{{$createcourse->video1}}" type="video/mp4">
        </video>
   
    {{-- <video style="width:100%" src="/storage/videos/{{$post->videos}}"> --}}
    <br><br>
    <div>
        {!!$createcourse->body!!}
    </div>
    <hr>
    <small>Created on {{$createcourse->created_at}}</small>
    <hr>
    <h2>2. {{$createcourse->vid2}}</h2>
    <video width="400" height="280" controls>
        <source src="/storage/videos/{{$createcourse->video2}}" type="video/mp4">
        </video>
    {{-- <video style="width:100%" src="/storage/videos/{{$post->videos}}"> --}}
    <br><br>
        
    <hr>
    <small>Created on {{$createcourse->created_at}}</small>
</div>
@endsection