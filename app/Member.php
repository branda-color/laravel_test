<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{   //寫了一個moudel
    public static function getMember()
    {
        return '我是MVC中的model';
    }
}