<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table = 'invoice';

    public function basket()
    {
        return $this->belongsTo('App\Model\basket');
    }
}
