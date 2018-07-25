<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
