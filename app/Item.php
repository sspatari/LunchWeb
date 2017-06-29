<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function items() {
        return $this->HasMany('App\OrderItem');

    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}


