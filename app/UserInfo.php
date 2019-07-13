<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public function ordersToUserInfo() {
        return $this->belongsTo('App\UserInfo','userInfo_id');
    }
}
