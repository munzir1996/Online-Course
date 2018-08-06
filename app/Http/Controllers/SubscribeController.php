<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Course;
use App\User;
use App\UserViews;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use Session;

class SubscribeController extends Controller
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
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }

    public function subscribeUser($id){
        $subscribe = new Subscribe();

        $subscribe->user_id = Auth::user()->id;
        $subscribe->course_id = $id;

        $subscribe->save();

        $course = Course::findOrFail($id);
        $videos = $course->videos;


        foreach($videos as $video)
        {
            UserViews::create([
                'user_id' => Auth::user()->id,
                'course_id' => $course->id,
                'video_id' => $video->id,
                'seen' => false
            ]);
        }

        Session::flash('success', 'Subscribed sucessfuly!');

        //Redirect to another page
		return redirect()->route('courses.show', $id);
    }
}
