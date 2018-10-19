@extends('layouts.app')
@section('content')

<form action="/LearnCodeAchieve/public/create/course" method="POST">
    {{ csrf_field() }}
    <div class="container-fluid border border-primary " style="max-width: 50%; border:black 1px;padding:16px;background-color: aliceblue; ">
        <div class="form-group">
            <label for="coursename">Course Name</label>
            <input type="text" class="form-control" required name="courseName" placeholder="Enter course name.">
        </div>
        <div class="form-group">

            <label for="domain">Domain</label>
            <input type="text" class="form-control" name="courseDomain" placeholder="Enter course domain.">
        </div>
        <div class="form-group">
            <label for="coursedesc">Course Description</label>
            <input type="text" class="form-control" required name="courseDesc" placeholder="Enter course description.">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Course thumbnail image</label>
            <input type="file" name="imgPath" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">

            <label for="exampleFormControlFile1">Course Video Files</label>

            <input type="file" name="videoPath" class="form-control-file" id="exampleFormControlFile1">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
@endsection
