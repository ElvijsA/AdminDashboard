<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
    public function users_all(){
        return $this->belongsToMany('App\User', 'website_user', 'user_id', 'website_id')-> withPivot('id');
    }
}
