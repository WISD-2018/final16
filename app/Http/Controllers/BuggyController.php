<?php

namespace App\Http\Controllers;

use App\Buggies;
use App\Buggies_info;
use App\Events\ShoppingStatusUpdate;
use App\Products;
use App\Products_info;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Description;

class BuggyController extends Controller
{
    //
    public function index($member_id,$buggies_id)
    {
        // Validate the request...
        $buggy_list= Buggies_info::all('buggies_id','product_id','amount')->where('buggies_id',$buggies_id);

        $id=Buggies_info::all('buggies_id','product_id')->where('buggies_id',$buggies_id);
        $pro_id=[];
        for ($i=0 ; $i < count($id) ; $i++){
            array_push($pro_id,json_decode($id)[$i]->product_id);
        }

        $products=Products::all('id','name','price','img')->find($pro_id);


        $aa = json_decode($buggy_list);

        foreach ($products as $product){
            array_push($aa,$product);
        }

        return $aa;
    }

    public function show($member_id,$buggies_id)
    {
        // Validate the request...


        return  view('buggy',['member_id'=>$member_id,'buggies_id'=>$buggies_id,'title'=>'購物車']);

    }

    public function waitfor($member_id,$buggies_id,Request $request){
        return view('waitfor',['member_id'=>$member_id,'buggies_id'=>$buggies_id,'total'=>$request->total,'title'=>'等候結帳']);
    }


    public function blending($buggy_id){
        if(Auth::check()){
            $member_id=Auth::id();
        }else{
            return redirect('/');
        }
        $buggy=Buggies::find($buggy_id);
        if($buggy->status=='已綁定'){
            return '<h1>此購物籃已綁定請使用別的購物籃</h1>';
        }else{
            $buggy->member_id=$member_id;
            $buggy->status='已綁定';
            $buggy->save();

            Sale::create([
                'member_id'=>$member_id,
                'date'=>date('Y-m-d'),
                'time'=>date('H:i:s'),
            ]);
            return redirect('buggy/'.$member_id.'/'.$buggy_id);
        }




    }

    public function product_insert(Request $request){
        $product=Buggies_info::where(['buggies_id'=>1,'product_id'=>$request->id])->get();

        if(!$product->isEmpty()){
            $amount=$request->amount + $product[0]->amount;
            Buggies_info::where(['buggies_id'=>1,'product_id'=>$request->id])
                ->update(['amount'=>$amount]);
            return redirect('/shopping');
        }else{
            $data=['buggies_id'=>1,'product_id'=>$request->id,'amount'=>$request->amount
                ,'sale_id'=>1];
            Buggies_info::create($data);

            return redirect('/shopping');
        }
    }

    public function product_destory(Request $request){
        $product=Buggies_info::where('product_id',$request->id)->delete();
        return redirect('/shopping');
    }

    public function product_update(Request $request){
        Buggies_info::where('product_id',$request->id)->update(['amount'=>$request->amount]);
        return redirect('/shopping');
    }

    public function update($sale_id){
        $info=Buggies_info::all()->where('sale_id',$sale_id);
        event(new ShoppingStatusUpdate($info));

    }
}
