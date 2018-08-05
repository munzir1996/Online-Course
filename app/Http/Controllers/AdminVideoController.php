<?php

namespace App\Http\Controllers;

use Image;
use Storage;
use Session;
use App\Video;
use App\Course;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index')->withVideos($videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('admin.videos.create')->withCourses($courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'course_id' => 'required',
            'video' => 'required',
        ]);

        $asset = new Video();
        $asset->title = $request->title;
        $asset->course_id = $request->course_id;

        //save video
		$asset->video = 'videos/' . $request->video->store('', 'videos'); //Return the file path after store 
		//}

        $asset->save();

        Session::flash('success', 'The Video was successfuly added!');

        //Redirect to another page
		return redirect()->route('adminvideos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
