<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
    protected $table='conversations';

    public function User()
    {
        return $this->belongsTo('App\User', 'Cod_User');
    }
    public function Lesson()
    {
        return $this->belongsTo('App\Lesson', 'Cod_Lesson');
    }
}
