<?php

namespace App\Http\Controllers;

use App\Member;
use App\Payment;
use App\Sale;
use App\Sales_info;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function index(){
        $member=Member::find(1);
        $payments=Payment::all()->where('member_id',1);
        $sales=Sale::where('member_id',1)->orderBy('date','desc')->get();
        $sales_info=new Sales_info();

        return view('member',['title'=>'會員資訊','member'=>$member,'payments'=>$payments
            ,'sales'=>$sales,'sales_info'=>$sales_info]);
    }

    public function modify(){
        $member=Member::find(1);
        $payments=Payment::all()->where('member_id',1);
        return view('modify',['title'=>'修改會員資料','member'=>$member,'payments'=>$payments]);
    }

    public function update(Request $request){
        $member=$this->member(1);
        $member->name=$request->name;
        $member->birthday=$request->birthday;
        $member->phone=$request->phone;
        $member->email=$request->email;
        $member->save();
        return redirect('/member');
    }

    public function upload_img(Request $request){
        if ($request->hasFile('photo')){
            $member=$this->member(1);
            $destinationPath = public_path().'/images/users';
            $filename = $request->photo->getclientoriginalname();
            $entension = $request->photo -> getClientOriginalExtension();
            $unique_name = 'user1.'.$entension;
            $request->file('photo')->move($destinationPath,$unique_name);
            $member->img='images/users/'.$unique_name;
            $member->save();
            return redirect('member/modify');
        }

        return '檔案或格式錯誤';
    }

    public function members(){
        $members=Member::all();
        return $members;
    }

    public function member($id){
        $member=Member::find($id);
        return $member;
    }
}
