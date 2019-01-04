<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_info extends Model
{
    //
    protected $table='sales_info';

    public function products()
    {
        return $this->belongsTo('App\Products');
    }
}
