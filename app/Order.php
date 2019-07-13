<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orders() {
        return $this->belongsTo('App\Book','book_id');
    }
    public function ordersToUser() {
        return $this->belongsTo('App\User','user_id');
    }
    public function ordersToUserInfo() {
        return $this->belongsTo('App\UserInfo','userInfo_id');
    }
    
}
