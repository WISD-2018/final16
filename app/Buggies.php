<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buggies extends Model
{
    //
    protected $table='buggies';



    protected $fillable=['id','member_id','status'];

    public function buggy_info(){
        return $this->hasOne('Buggies_info','buggies_id','id');
    }

}
