<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $table='lessons';
    
    public function Course()
    {
        return $this->belongsTo('App\Courses', 'Cod_Course');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'Cod_User');
    }

    public function Attachments()
    {
        return $this->hasMany('App\Attachments', 'Cod_Lesson');
    }

    public function Conversations()
    {
        return $this->hasMany('App\Conversations', 'Cod_Lesson');
    }

    public function Assignment()
    {
        return $this->hasMany('App\Assingment', 'Cod_Lesson');
    }

}
