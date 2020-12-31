<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $table='attachments';

    public function Lesson()
    {
        return $this->belongsTo('App\Lessons', 'Cod_Lesson');
    }
}
