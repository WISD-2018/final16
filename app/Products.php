<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    protected $table='products';

    public function sales_info(){
        return $this->hasMany('App\Sales_info','id','product_id');
    }

}
