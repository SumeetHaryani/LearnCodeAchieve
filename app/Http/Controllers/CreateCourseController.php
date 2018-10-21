<?php

namespace App\Http\Controllers;

use App\CreateCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class CreateCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $createcourses = CreateCourse::orderBy('created_at','desc')->paginate(10);
        return view('createcourses.index')->with('createcourses', $createcourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcourses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:9999',
                
            ]);
           // Handle File Upload
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename1 = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore1= $filename1.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore1);
            } if($request->hasFile('video1')) {
                $filenameWithExt = $request->file('video1')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('video1')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('video1')->storeAs('public/videos', $fileNameToStore);
            }
            if($request->hasFile('video2')) {
                $filenameWithExt = $request->file('video2')->getClientOriginalName();
                // Get just filename
                $filename2 = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('video2')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore2= $filename2.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('video2')->storeAs('public/videos', $fileNameToStore2);
            }

            

            
            // Create Post
            $createcourse = new CreateCourse;
            $createcourse->title = $request->input('title');
            $createcourse->vid1 = $request->input('vid1');
            $createcourse->vid2 = $request->input('vid2');
            $createcourse->body = $request->input('body');
            $createcourse->quiz=$request->input('quiz');
            $createcourse->video1 = $fileNameToStore;
            $createcourse->video2 = $fileNameToStore2;
            //$createcourse->user_id = auth()->user()->id;
           $createcourse->cover_image = $fileNameToStore1;
            $createcourse->save();
            return redirect('/createcourses')->with('success', 'Course Created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreateCourse  $createCourse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $createcourse = CreateCourse::find($id);
        return view('createcourses.show')->with('createcourse', $createcourse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CreateCourse  $createCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreateCourse  $createCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateCourse $createCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreateCourse  $createCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateCourse $createCourse)
    {
        //
    }
}
