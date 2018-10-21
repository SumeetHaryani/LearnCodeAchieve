@extends('layouts.app')

@section('content')

    <h1>Create New Course</h1>
    {!! Form::open(['action' => 'CreateCourseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Course Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Course Description')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Add Description here..'])}}
        </div>
        
        <div class="form-group">
            {{Form::file('cover_image')}}

        </div>
        <div class="form-group">
            {{Form::file('videos')}}

        </div>


        {{-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="cover_image" >
                
                  <label class="custom-file-label" for="cover_image">Choose file</label>
                </div>
              </div> --}}
            
        <div>

            
        {{Form::submit('Add Course', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        </div>
@endsection