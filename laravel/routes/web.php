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
Route::get("/hello_world","DemoController@helloWorld");
Route::get("/danh-muc","DemoController@danhMuc");
Route::get("/san-pham","DemoController@sanpham");
Route::get("/nhan-vien","DemoController@nhanvien");
Route::get("them-danhmuc","DemoController@themdanhmuc");
Route::post("them-danhmuc","DemoController@luudanhmuc");
Route::get("them-sanpham","DemoController@themsanpham");
Route::post("them-sanpham","DemoController@luusanpham");
Route::get("them-nhanvien","DemoController@themnhanvien");
Route::post("them-sanpham","DemoController@luunhanvien");

Route::get("/sua-danhmuc","DemoController@suadanhmuc");
Route::post("/sua-danhmuc","DemoController@capnhatdanhmuc");

Route::get("/xoa-danhmuc/{id}","DemoController@xoadanhmuc");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
