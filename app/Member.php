<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    //

    protected $table='members';

    protected $fillable = [
        'name', 'account','email', 'password','phone','birthday','remember_token','points','img'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
