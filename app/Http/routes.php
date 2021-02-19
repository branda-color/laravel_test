<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('basic',function(){

return 'basic';

});

Route::post('basicl',function(){

    return 'basic1';
});

//多請求路由,路由名
Route::match(['get','post'],'multy',function(){

    return'multy';
});

//響應所有路由(網址後面隨便亂打都響應這頁)
Route::any('multy1',function(){

    return 'multy';
});

Route::get('user/{id}',function($id){
 return $id;
});

//路由參數默認值
Route::get('user1/{name?}',function($name =null){

    return $name;
});


//擴展把name形式使用規則匹配
Route::get('user2/{name?}',function($name){

    return $name;
})->where('name','[A-Za-z]+');


//路由使用多個參數

Route::get('user3/{id}/{name?}',function($id,$name){

    return $id.'=>'.$name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由別名
Route::get('user/center',['as'=>'center',function(){

    return route('center');
}]);

//路由輸出頁面

Route::get('shitu', function () {
    return view('welcome');
});

//控制器中的代碼和路由結合
Route::get('member/info','MemberController@info');



