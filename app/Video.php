<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function userView()
    {
        return $this->belongsTo(UserViews::class);
    }
}
