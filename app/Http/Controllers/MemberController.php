<?php

namespace App\Http\Controllers;

use App\Member;
use App\Payment;
use App\Products;
use App\Sale;
use App\Sales_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
    //

    public function index(){
        if(Auth::check()){
            $id=Auth::id();
        }else{
            return \redirect('/auth/login');
        }
        $member=Member::find($id);
        $payments=Payment::all()->where('member_id',1);
        $sales=Sale::where('member_id',$id)->orderBy('date','desc')->orderBy('time','desc')->get();
        $sales_info=new Sales_info();
        $products=new Products();

        return view('member',['title'=>'會員資訊','member'=>$member,'payments'=>$payments
            ,'sales'=>$sales,'sales_info'=>$sales_info,'products'=>$products]);
    }


    public function modify(){
        if(Auth::check()){
            $id=Auth::id();
        }else{
            return \redirect('/auth/login');
        }
        $member=Member::find($id);
        $payments=Payment::all()->where('member_id',1);
        return view('modify',['title'=>'修改會員資料','member'=>$member,'payments'=>$payments]);
    }

    public function update(Request $request){
        if(Auth::check()){
            $id=Auth::id();
        }else{
            return \redirect('/auth/login');
        }
        $member=$this->member($id);
        $member->name=$request->name;
        $member->birthday=$request->birthday;
        $member->phone=$request->phone;
        $member->email=$request->email;
        $member->save();
        return redirect('/member');
    }

    public function upload_img(Request $request){
        if ($request->hasFile('photo')){
            if(Auth::check()){
                $id=Auth::id();
            }else{
                return \redirect('/auth/login');
            }
            $member=$this->member($id);
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

    public function getLogin()
    {
        if(Auth::check()){
            return \redirect('/');
        }else{
//            return view('auth.login',['title'=>'使用者登入']);
            return view('frontend.Sign_in',['title'=>'使用者登入']);
        }
    }

    public function postLogin(Request $request)
    {
        if ($request->code!=$request->vercode){
            return '驗證碼錯誤請重新輸入';
        }
        $member_data=array(
            'account'=>$request->get('account'),
            'password'=>$request->get('password')
        );

        if(Auth::attempt($member_data)){
            return \redirect('/member');
        }else{
            return '帳號或密碼錯誤請重新輸入';
        }
    }

    public function postLogout(Request $request)
    {
        $buggy=new BuggyController;
        $buggy->unblending();
        Auth::guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function getRegister()
    {
        if(Auth::check()){
            return \redirect('/');
        }else{
            return view('frontend.Register',['title'=>'註冊']);
//            return view('auth.register',['title'=>'註冊']);
        }

    }

    public function postRegister(Request $request)
    {

        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'account' => $request->account,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'points'=>0,
            'img'=>'images/users/default.jpg',
            'remember_token' => str_random(10)

        ]);
        return \redirect('/auth/login');
    }


}
