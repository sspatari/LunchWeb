<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_items()
    {
        return $this->hasMany('App\Order_item');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
