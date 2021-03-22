<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'roles';

    public function users()
    {
        return $this->hasMany('App\Model\users');
    }
}
