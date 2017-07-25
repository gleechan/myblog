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

Route::get('/login', function(){
    /*
     * 登录页面
     */
});

Route::get('/api/login', function(){
    /*
     * 登录接口
     */
    $user = new App\User;
    return $user->login();
});

Route::get('/api/logout', function(){
    /*
     * 登出接口
     */
});
