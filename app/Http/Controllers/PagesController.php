<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\User;
use App\Video;
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
}
