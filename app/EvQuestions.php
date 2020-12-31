<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvQuestions extends Model
{
    protected $table='ev_questions';
    public function Course()
    {
        return $this->belongsTo('App\Course', 'Cod_Course');
    }
    public function EvOptions()
    {
        return $this->hasMany('App\EvOptions', 'Cod_Question');
    }
}
