<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function createCourse(Request $request)
    {
        //dd($request->all());
        $course = new course();
        $course->course_name = $request->courseName;
        $course->course_domain = $request->courseDomain;
        $course->course_description = $request->courseDesc;
        $course->img_path = $request->imgPath;
        $course->video_path = $request->videoPath;
        $course->save();
        return view('courses_list');
    }
    public function courseAdd()
    {
        return view('course');
    }
    public function courses()
    {
        return view('courses_list');
    }
}
// $table->increments('c_id');
// $table->string('course_name');
// $table->string('course_domain');
// $table->string('course_description');
// $table->string('img_path');
// $table->string('video_path');
