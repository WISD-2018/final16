<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_info extends Model
{
    //
    protected $table='sales_info';

    protected $fillable=['sales_id','product_id','amount'];

    public function products()
    {
        return $this->belongsTo('App\Products');
    }
}
