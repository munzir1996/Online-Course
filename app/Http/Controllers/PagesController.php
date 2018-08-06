<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\User;
use App\Video;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getWelcome()
    {
        return view('pages.welcome');
    }

    public function getContactus()
    {
        return view('pages.contactus');
    }

    public function getDashboard(){

        $courses = Course::all();
        $teachers = Teacher::all();
        $users = User::all();
        $videos = Video::all();

        return view('admin.welcome')->withCourses($courses)
                                    ->withTeachers($teachers)
                                    ->withUsers($users)
                                    ->withVideos($videos);
    }

    public function getProfile($id){
        $user = User::findOrFail($id);
        return view('profile')->withUser($user);
    }

    public function updateProfile(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'sometimes|max:100',
            'password' => 'sometimes|min:6',
        ]);

        $user = User::findOrFail($id);
        if ($request->has('name'))
        {
            $user->name = $request->name;
        }
        if ($request->has('email'))
        {
            $user->email = $request->email;
        }
        
        if ($request->has('password'))
        {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        Session::flash('success', 'Your profile was successfuly updated!');

        //Redirect to another page
		return redirect()->route('profile', $user->id);
    }
}
