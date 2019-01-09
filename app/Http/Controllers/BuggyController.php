<?php

namespace App\Http\Controllers;

use App\Buggies;
use App\Buggies_info;
use App\Events\CheckOut;
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

        $id=Buggies_info::all('buggies_id','product_id','created_at')->where('buggies_id',$buggies_id)->sortBy('created_at');
        $pro_id=[];
        $aa = json_decode($buggy_list);
        for ($i=0 ; $i < count($id) ; $i++){
            array_push($pro_id,json_decode($id)[$i]->product_id);
            $products=Products::all('id','name','price','img')->find(json_decode($id)[$i]->product_id);
            array_push($aa,$products);
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


                //sales_info資料表 建檔
                $sale_id=Sale::all('id','member_id')->where('member_id',$member_id)->last();
                $pro_id=Buggies_info::all()->where('sale_id',$sale_id->id);
                foreach ($pro_id as $pro){
                    Sales_info::create([
                        'sales_id' => $sale_id->id,
                        'product_id' => $pro->product_id,
                        'amount' => $pro->amount
                    ]);

                }

                //buggies_info 清除
                $clear=Buggies_info::where('sale_id',$sale_id->id);
                $clear->delete();
                
                //buggies 結束綁定



                return redirect('/member');
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

            //sales資料表 建檔
            Sale::create([
                'member_id'=>$member_id,
                'date'=>date('Y-m-d'),
                'time'=>date('H:i:s'),
            ]);


            return redirect('/buggy');
        }




    }

    public function product_insert(Request $request){
        broadcast(new ShoppingStatusUpdate($request->member_id));
        $sale_id=Sale::all('id','member_id')->where('member_id',$request->member_id)->last();
        $product=Buggies_info::where(['buggies_id'=>1,'product_id'=>$request->id,'sale_id'=>$sale_id->id])->get();
        if(!$product->isEmpty()){
            $amount=$request->amount + $product[0]->amount;
            Buggies_info::where(['buggies_id'=>1,'product_id'=>$request->id])
                ->update(['amount'=>$amount]);
            return redirect('/shopping');
        }else{

            $data=['buggies_id'=>1,'product_id'=>$request->id,'amount'=>$request->amount
                ,'sale_id'=>$sale_id->id];
            Buggies_info::create($data);
            return redirect('/shopping');
        }
    }

    public function product_destory(Request $request){
        broadcast(new ShoppingStatusUpdate($request->member_id));
        $product=Buggies_info::where('product_id',$request->id)->delete();
        return redirect('/shopping');
    }

    public function product_update(Request $request){
        broadcast(new ShoppingStatusUpdate($request->member_id));
        Buggies_info::where('product_id',$request->id)->update(['amount'=>$request->amount]);
        return redirect('/shopping');
    }

    public function product_checkout(Request $request){
       //模擬自動結帳機，已經結帳完成‧
        broadcast(new CheckOut($request->member_id));
        return redirect('/shopping');
    }


    public function test(){
        $member_id=1;
        return view('testQQ',['member_id'=>$member_id]);
    }
    public function test2($id)
    {
        broadcast(new ShoppingStatusUpdate($id));
    }
}
