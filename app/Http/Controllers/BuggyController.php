<?php

namespace App\Http\Controllers;

use App\Buggies_info;
use App\Products;
use App\Products_info;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;

class BuggyController extends Controller
{
    //
    public function index($id)
    {
        // Validate the request...
        $buggy_list= Products_info::all('product_id','amount','price','sale_id','img')->where('sale_id',$id)->toJson();

        return $buggy_list;
    }

    public function show($id)
    {
        // Validate the request...
        $products=Products::all();

        return  view('buggy',['products'=>$products,'id'=>$id,'title'=>'購物車']);
    }

    public function result(Request $request){
        return $request->total;
    }
}
