<?php

namespace App\Http\Controllers;

use Image;
use Storage;
use Session;
use App\Teacher;
use App\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('admin.courses.create')->withTeachers($teachers);
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
            'name' => 'required|max:100',
            'description' => 'required',
            'level' => 'required',
            'duration' => 'required|integer',
            'teacher_id' => 'required|integer',
            'image' => 'sometimes|image',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->level = $request->level;
        $course->duration = $request->duration;
        $course->teacher_id = $request->teacher_id;

        //Save image
		//if($request->hasFile('image')){
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
            //Image::make($image)->resize(260, 260)->save($location);
            
            $image->move($location, $filename);
			
			$course->image = $filename;
		//}

        $course->save();

        Session::flash('success', 'The course was successfuly added!');

        //Redirect to another page
		return redirect()->route('admincourses.create');
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

        return view('admin.courses.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all();
        return view('admin.courses.edit')->withCourse($course)->withTeachers($teachers);
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
        $this->validate($request, [
            'name' => 'sometimes|max:100',
            'description' => 'sometimes',
            'level' => 'sometimes',
            'duration' => 'sometimes',
            'teacher_id' => 'sometimes|integer',
            'image' => 'sometimes|image',
        ]);

        $course = Course::findOrFail($id);
        if ($request->has('name'))
        {
            $course->name = $request->name;
        }
        if ($request->has('description'))
        {
            $course->description = $request->description;
        }
        
        if ($request->has('level'))
        {
            $course->level = $request->level;
        }

        if ($request->has('duration'))
        {
            $course->duration = $request->duration;
        }
        
        if ($request->has('teacher_id'))
        {
            $course->teacher_id = $request->teacher_id;
        }

        //Save image
		if($request->hasFile('image')){
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
            //Image::make($image)->resize(260, 260)->save($location);
            
            $image->move($location, $filename);
			
			$course->image = $filename;
		}

        $course->save();

        Session::flash('success', 'The course was successfuly Updated!');

        //Redirect to another page
		return redirect()->route('admincourses.edit', $course->id);
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
