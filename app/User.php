<?php

namespace App;

use App\models\Website;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function websites(){
        return $this->belongsToMany('App\Models\Website', 'website_user', 'user_id', 'website_id')-> withPivot('id');
    }

    public function website(){
        return $this->belongsTo('App\Models\Website');
    }
}
