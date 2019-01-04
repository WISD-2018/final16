<?php

namespace App\Http\Controllers;

use App\Buggies;
use App\Buggies_info;
use App\Events\ShoppingStatusUpdate;
use App\Products;
use App\Products_info;
use App\Sale;
use App\Sales_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Description;

class BuggyController extends Controller
{
    //
    public function index($buggies_id)
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

    public function show()
    {
        // Validate the request...

        if(Auth::check()){
            $member_id=Auth::id();
        }else{
            return \redirect('/auth/login');
        }
        $buggies_id=Buggies::where(['member_id'=>$member_id,'status'=>'已綁定'])->first();
        if(!empty($buggies_id)){
            return  view('buggy',['member_id'=>$member_id,'buggies_id'=>$buggies_id->id,'title'=>'購物車']);
        }else{
            return '<h1>請先綁定購物籃子</h1>';
        }


    }

    public function waitfor(){
        if(Auth::check()){
            $member_id=Auth::id();
        }else{
            return \redirect('/auth/login');
        }
        $buggies_id=Buggies::where(['member_id'=>$member_id,'status'=>'已綁定'])->first();
        if(!empty($buggies_id)) {
            return view('waitfor', ['member_id'=>$member_id,'buggies_id'=>$buggies_id->id,'title' => '等候結帳']);
        }else{
            return '<h1>請先綁定購物籃子</h1>';
        }
        }

        public function checkout(){
            if(Auth::check()){
                $member_id=Auth::id();
            }else{
                return \redirect('/auth/login');
            }
            $buggies_id=Buggies::where(['member_id'=>$member_id,'status'=>'已綁定'])->first();
            if(!empty($buggies_id)) {

                //sales資料表 建檔
                Sale::create(['member_id'=>$member_id]);

                //sales_info資料表 建檔
                $sale_id=Sale::all('id','member_id')->where('member_id',$member_id)->first();
                Sales_info::create(['sales_id'=>$sale_id->id]);


                return true;
            }else{
                return '<h1>請先綁定購物籃子</h1>';
            }

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
            return redirect('/buggy');
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

    public function product_checkout(){

       //模擬自動結帳機，已經結帳完成‧
        return redirect('/shopping');
    }


    public function test(){
        return view('testQQ');

    }
    public function test2($id)
    {
        broadcast(new ShoppingStatusUpdate($id));
    }

    public function update($sale_id){
        $info=Buggies_info::all()->where('sale_id',$sale_id);
        event(new ShoppingStatusUpdate($info));


    }
}
