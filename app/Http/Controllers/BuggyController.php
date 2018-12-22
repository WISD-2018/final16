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
    public function index($member_id,$buggies_id)
    {
        // Validate the request...
        $buggy_list= Buggies_info::all('buggies_id','product_id','amount','img')->where('buggies_id',$buggies_id);

        $id=Buggies_info::all('buggies_id','product_id')->where('buggies_id',$buggies_id);
        $pro_id=[];
        for ($i=0 ; $i < count($id) ; $i++){
            array_push($pro_id,json_decode($id)[$i]->product_id);
        }

        $products=Products::all('id','name','price')->find($pro_id);


        $aa = json_decode($buggy_list);

        foreach ($products as $product){
            array_push($aa,$product);

        }


        return $aa;
    }

    public function show($member_id,$buggies_id)
    {
        // Validate the request...
        $id=Buggies_info::all('buggies_id','product_id')->where('buggies_id',$buggies_id);
        $pro_id=[];
        for ($i=0 ; $i < count($id) ; $i++){
            array_push($pro_id,json_decode($id)[$i]->product_id);
        }

        $products=Products::all()->find($pro_id);

        return  view('buggy',['products'=>$products,'buggies_id'=>$buggies_id,'title'=>'購物車']);

    }

    public function result(Request $request){
        return $request->total;
    }
}
