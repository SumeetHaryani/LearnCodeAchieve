@extends('layouts.app')

@section('content')
    <h1 class="page-header title"><i class="fas fa-pen-alt"></i> Posts</h1>
    <div >
    <a href="/posts/create" class="btn btn-primary create">Create Post</a>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container list-group-item post">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection