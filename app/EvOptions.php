<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvOptions extends Model
{
    protected $table='ev_options';
    public function EvQuestions()
    {
        return $this->hasMany('App\EvQuestions', 'Cod_Question');
    }
}
