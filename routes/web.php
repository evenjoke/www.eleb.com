<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//登陆验证接口
/*Route::post('login','UserController@login')->name('login');*///弃用
Route::post('login','MemberController@login')->name('login');//启用
//注册接口
Route::post('regist','RegistController@regist')->name('regist');
//验证码接口
Route::get('sms','RegistController@sms')->name('sms');
//修改密码接口
Route::post('changePassword','MemberController@changePassword')->name('changePassword');
//忘记密码接口
Route::post('forgetPassword','MemberController@forgetPassword')->name('forgetPassword');
//商家列表接口
Route::get('businessList','BusinessListController@businessList')->name('businessList');
//指定商家列表
Route::get('business','BusinessListController@business')->name('business');
//用户地址列表接口
Route::get('addressList','AddressController@addressList')->name('addressList');
// 指定地址接口
Route::get('address','AddressController@address')->name('address');
// 保存新增地址接口
Route::post('addAddress','AddressController@addAddress')->name('addAddress');
// 保存修改地址接口
Route::post('editAddress','AddressController@editAddress')->name('editAddress');
