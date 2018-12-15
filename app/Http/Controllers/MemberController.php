<?php

namespace App\Http\Controllers;

use App\Member;
use App\Payment;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function index(){
        $member=Member::find(1);
        $payments=Payment::all()->where('member_id',1);
        return view('member',['title'=>'會員資訊','member'=>$member,'payments'=>$payments]);
    }
}
