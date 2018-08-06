<?php

namespace App\Http\Controllers;

use App\CourseComment;
use App\Course;
use Session;
use App\Subscribe;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subscribes = Subscribe::all();
        $courses = Course::all();
        return view('courses.index')->withCourses($courses)->withSubscribes($subscribes);
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
        $this->validate($request, [
            'user_id' => 'required',
            'course_id' => 'required',
            'comment' => 'required',
        ]);

        $comment = new CourseComment();
        $comment->user_id = $request->user_id;
        $comment->course_id = $request->course_id;
        $comment->comment = $request->comment;

        $comment->save();

        Session::flash('success', 'The comment was successfuly added!');

        //Redirect to another page
		return redirect()->route('courses.show', $comment->course_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        $comments = CourseComment::where('course_id', $id)->get();

        $subscribe = Subscribe::where('user_id', Auth::user()->id)->where('course_id', $id)->first();
        
        if(empty($subscribe))
        {
            $value = true;
        }
        else 
        {
            $value = false;
        }

        $subscribe = $value;

        return view('courses.show')->withCourse($course)->withComments($comments)->withSubscribe($subscribe);
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
