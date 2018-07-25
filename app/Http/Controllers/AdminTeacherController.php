<?php

namespace App\Http\Controllers;

use Purifier;
use Image;
use Storage;
use Session;
use App\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index')->withTeachers($teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
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
            'degree' => 'required',
            'department' => 'required',
            'image' => 'sometimes|image',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->degree = $request->degree;
        $teacher->department = $request->department;

        //Save image
		//if($request->hasFile('image')){
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
            //Image::make($image)->resize(260, 260)->save($location);
            
            $image->move($location, $filename);
			
			$teacher->image = $filename;
		//}

        $teacher->save();

        Session::flash('success', 'The Teacher was successfuly added!');

        //Redirect to another page
		return redirect()->route('adminteachers.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.show')->withTeacher($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit')->withTeacher($teacher);
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
            'name' => 'required|max:100',
            'degree' => 'required',
            'department' => 'required',
            'image' => 'sometimes|image',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->degree = $request->degree;
        $teacher->department = $request->department;

        //Save image
		if($request->hasFile('image')){
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
            //Image::make($image)->resize(260, 260)->save($location);
            
            $image->move($location, $filename);
			
			$teacher->image = $filename;
		}

        $teacher->save();

        Session::flash('success', 'The Teacher was successfuly Updated!');

        //Redirect to another page
		return redirect()->route('adminteachers.edit', $teacher->id);
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
