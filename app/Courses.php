<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table='courses';
    public function Lessons()
    {
        return $this->hasMany('App\Lessons', 'Cod_Course');
    }
    public function EvQuestions()
    {
        return $this->hasMany('App\ev_questions', 'Cod_Courso');
    }
    
    public function User()
    {
        return $this->belongsToMany('App\User', 'courses_per_users', 'Cod_Course', 'Cod_User');
    }
    
}
