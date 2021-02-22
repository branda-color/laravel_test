<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function test1()
    {
        //測試路由OK
        //return 'test1';

        //測試資料庫連接是否成功
        $student = DB::select('select*from student');
        var_dump($student);
    }
}