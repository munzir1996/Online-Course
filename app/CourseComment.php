<?php

namespace App;

use App\Teacher;
use Illuminate\Database\Eloquent\Model;

class CourseComment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
