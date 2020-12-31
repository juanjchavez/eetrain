<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table='users';

    public function Role()
    {
        return $this->belongsTo('App\Roles', 'Cod_Role');
    }

    public function Lessons()
    {
        return $this->hasMany('App\Lessons', 'Cod_User');
    }

    public function Conversations()
    {
        return $this->hasMany('App\Conversations', 'Cod_User');
    }

    public function Assignments()
    {
        return $this->hasMany('App\Assignment', 'Cod_User');
    }

    public function Courses()
    {
        return $this->belongsToMany('App\Courses', 'courses_per_users', 'Cod_User', 'Cod_Course');
    }

}
