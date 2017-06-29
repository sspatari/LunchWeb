<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function items() {
        return $this->HasMany('App\Orders_item');

    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}


