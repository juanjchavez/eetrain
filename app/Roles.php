<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table='roles';
    protected $fillable = [
        'Role_Name',
    ];
    
    public function Users()
    {
        return $this->hasMany('App\User', 'Cod_Role');
    }


}
