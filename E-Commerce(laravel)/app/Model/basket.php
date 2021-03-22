<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    protected $table = 'basket';

    public function users()
    {
        return $this->belongsTo('App\Model\users');
    }

    public function invoice()
    {
        return $this->hasOne('App\Model\invoice');
    }

    public function basket()
    {
        return $this->belongsToMany('App\Model\basket', 'basket_has_product', 'product_id', 'basket_id');
    }
}
