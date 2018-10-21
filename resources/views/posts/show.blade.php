@extends('layouts.app')

@section('content')
    <h1 class="title">{{$post->title}}</h1>
    <br><br>
    <div class="container list-group-item main">
        {!!$post->body!!}
    <hr>
    <small>Written on {{$post->created_at}} by <strong>{{$post->user['name']}}</strong></small>
    </div>
    <div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary edit">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger delete'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </div>
    <div class="page-header title">
    <h2><i class="fas fa-comments"></i> Comment Section</h2>
    </div>
    <div class="comments">
        <ul>
            @foreach ($post->comments as $comment)
                        <li class="list-group-item commentsection">
                            {{ $comment->body }}
                          <br>  <small>Written {{$comment->created_at->diffForHumans()}} by <strong>{{$comment->user['name']}}</strong></small>
                        </li>
            @endforeach
       </ul>
    </div>
    <div class="card container comment1">
        <div class="card-block">
            {!! Form::open(['action' => ['CommentsController@store',$post->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::textarea('body','', ['class' => 'form-control commentarea','rows'=> 1, 'placeholder' => 'Your Comment'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Add Comment', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
    </div> 
@endsection