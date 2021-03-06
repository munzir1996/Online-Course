<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('admin', function() {
    return view('admin.welcome');
});
*/

Route::prefix('admin')->middleware('auth')->name('admin')->group(function(){
    
    Route::get('/', 'PagesController@getDashboard');

    Route::resource('teachers', 'AdminTeacherController');
    Route::resource('users', 'AdminUserController');
    Route::resource('courses', 'AdminCourseController'); 
    Route::resource('videos', 'AdminVideoController');    

});

//Videos
Route::get('videos/course/{course}', 'VideoController@courseVideos')->name('videos.course')->middleware('auth');
Route::get('videos/{video}/', 'VideoController@getVideo')->name('video.show')->middleware('auth');


//Courses
Route::resource('courses', 'CourseController')->middleware('auth');

//Teachers
Route::resource('teachers', 'TeacherController')->middleware('auth');

//Subscribes
Route::resource('subscribes', 'SubscribeController')->middleware('auth');
Route::post('subscribes/{user}', 'SubscribeController@subscribeUser')->name('subscribe.user')->middleware('auth');

//Profiles
Route::get('profile/{id}', 'PagesController@getProfile')->name('profile')->middleware('auth');
Route::put('profile/{id}/edit', 'PagesController@updateProfile')->name('profile.edit')->middleware('auth');

Route::get('contactus', 'PagesController@getContactus')->name('contactus')->middleware('auth');

Route::get('/', 'PagesController@getWelcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
