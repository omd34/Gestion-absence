<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'type'
    ];
    public function userRole()
{
    return $this->hasMany('App\User','id_user', 'id_role')->withTimestamps();
}
}
