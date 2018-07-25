<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function courseComments()
    {
        return $this->hasMany('App\CourseComment');
    }

    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    public function subscribes()
    {
        return $this->hasMany('App\Subscribe');
    }
}
