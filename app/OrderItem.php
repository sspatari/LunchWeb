<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function user()
    {
        return $this->belongsTo('user');
    }

    public function order()
    {
        return $this->belongsTo('order');
    }
}
