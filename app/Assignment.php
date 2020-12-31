<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table='assignments';
    public function User()
    {
        return $this->belongsTo('App\User', 'Cod_User');
    }
    
    public function Assignment()
    {
        return $this->belognsTo('App\Assingment', 'Cod_Lesson');
    }
}
