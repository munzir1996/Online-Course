<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courseComments()
    {
        return $this->hasMany('App\CourseComment');
    }

    public function subscribes()
    {
        return $this->hasMany('App\Subscribe');
    }

    public function userView()
    {
        return $this->belongsTo(UserViews::class);
    }
}
