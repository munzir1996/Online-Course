<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserViews extends Model
{
    //

    protected $fillable = ['user_id', 'course_id', 'video_id', 'seen'];
    public const IS_SEEN = true;
    public const NOT_SEEN = false;


    public function  courses()
    {
        return $this->hasMany(Course::class);
    }

    public function  users()
    {
        return $this->hasMany(User::class);
    }

    public function  videos()
    {
        return $this->hasMany(Video::class);
    }

}
