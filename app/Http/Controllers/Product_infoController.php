<?php

namespace App\Http\Controllers;

use App\Product_info;
use App\Products;
use App\Vendor;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class Product_infoController extends Controller
{
    //
    public function product_Search(Request $request){
        # $product=Products::join('products.id','=','product_info.product_id')->get();
        //使用all();將資料全數取出

        $results = products::where('name','like','%'.$request -> name.'%') -> get();
        if($results->isEmpty()){
            return '查無此商品,請重新查詢';
        }
        else{
            return view('frontend.Product_index',['title'=>'商品選擇頁面','results' => $results
                ,'request'=>$request->name]);
        }


//        return view('frontend.Product_info',compact('name'),['title'=>'商品資訊_查詢','products' => $name]);
//        return view('frontend.Product_info',compact('name'),['title'=>'商品資訊_查詢','products' => $name]);

    }
    public function index()
    {

        return view('frontend.Product_info',['title'=>'商品資訊_查詢']);
//        return $request;
    }

    public function product_info($id = 1){
        $products = Products::find($id);
        if(Empty($products)){
            return '此商品並不存在';
        }
        $products_info=Product_info::find($id);
        $vendors=Vendor::find($products->vendor_id)->first();

        return view('frontend.Product_info2',['title'=>'商品資訊','products' => $products,
            'products_info'=>$products_info,'vendors'=>$vendors]);
    }
}
