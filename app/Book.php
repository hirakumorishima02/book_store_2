<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function booksToOrder() {
        return $this->belongsTo('App\Order');
    }
}
