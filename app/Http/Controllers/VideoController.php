<?php

namespace App\Http\Controllers;

use App\Video;
use App\Course;
use App\UserViews;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }

    public function courseVideos($id){
        
        $videos = Video::where('course_id', $id)->get();
        $course = Course::findOrFail($id);

        return view('videos.index')->withVideos($videos)->withCourse($course);
    }

    public function getVideo($id){

        $video = Video::findOrFail($id);
        $course = $video->course;

        $views = UserViews::where('user_id', Auth::user()->id)
            ->where('course_id', $course->id)
            ->where('video_id', $video->id)->first();
    
        if($views->seen == UserViews::NOT_SEEN)
        {
            $views->seen = UserViews::IS_SEEN;
            $views->save();
        }

        return view('videos.show')->withVideo($video)->withCourse($course);
    }
}
