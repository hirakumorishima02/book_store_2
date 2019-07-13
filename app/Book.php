<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function ordersToBook() {
        return $this->hasMany('App\Order','book_id');
    }
}
