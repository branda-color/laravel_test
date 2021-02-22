<?php

namespace App\Http\Controllers;

use App\Member;


class MemberController extends Controller
{
    public function info()
    {
        //輸出原始頁面
        //return view ('member_info');
        //輸出默認的模板頁面
        //return view('info');

        //輸出對應資料夾的模板(在view>>member資料夾>>info)
        //return view('member/info');

        //模板可以帶變量

        //return view('member/info',['name'=>'Bob','age'=>'18']);


        return Member::getMember();


    }
}