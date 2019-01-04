<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buggies_info extends Model
{
    //
    protected $table='buggies_info';

    protected $fillable=['buggies_id','product_id','amount','sale_id'];

    public function buggies()
    {
        return $this->belongsTo('Buggies');
    }
}
