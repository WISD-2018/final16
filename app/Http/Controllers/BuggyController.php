<?php

namespace App\Http\Controllers;

use App\Buggies_info;
use App\Products;
use Illuminate\Http\Request;

class BuggyController extends Controller
{
    //

    public function index()
    {
        // Validate the request...

        $buggies_info=Buggies_info::all()->where('id',1);

        $products=Products::all();

        return view('buggy',['title'=>'購物車','buggies_info'=>$buggies_info,'products'=>$products]);
    }

    public function result(Request $request){
        return $request->total;
    }
}
