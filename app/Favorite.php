<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

};

public function roles()
{
    return $this->belongsToMany('App\User' , 'favorite_user' , 'favorite_id' , 'user_id');
}
