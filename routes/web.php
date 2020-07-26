<?php

use Illuminate\Support\Facades\Route;

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
/*

Route::get('myPage/top', function () {
    return view('top');
});

route::get('hello','HelloController@index');
route::get('morning','HelloController@morning');
*/
Route::get('/', function () {
    return view('welcome');
});

route::get('top','MyPageController@top');
route::get('selfIntroduce','MyPageController@selfIntroduce');
route::get('contactUs','MyPageController@contactUs');

route::post('contactUs', 'MyPageController@store');