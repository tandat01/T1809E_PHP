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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello_world","DemoController@helloWorld");
Route::get("/danh-muc","DemoController@danhMuc");
Route::get("/san-pham","DemoController@sanpham");
Route::get("/nhan-vien","DemoController@nhanvien");
Route::get("/khach-hang","DemoController@khachhang");

Route::get("them-danhmuc", "DemoController@themdanhmuc")->middleware("auth");

Route::group(['middleware' => 'auth'], function () {

    Route::post("them-danhmuc", "DemoController@luudanhmuc");


    Route::get("them-sanpham", "DemoController@themsanpham");
    Route::post("them-sanpham", "DemoController@luusanpham");


    Route::get("them-nhanvien", "DemoController@themnhanvien");
    Route::post("them-nhanvien", "DemoController@luunhanvien");

    Route::get("/sua-danhmuc", "DemoController@suadanhmuc");
    Route::post("/sua-danhmuc", "DemoController@capnhatdanhmuc");

    Route::get("/xoa-danhmuc/{id}", "DemoController@xoadanhmuc");

    Route::get("/sua-sanpham", "DemoController@suasanpham");
    Route::post("/sua-sanpham", "DemoController@capnhatsanpham");


    Route::get("/sua-nhanvien", "DemoController@suanhanvien");
    Route::post("/sua-nhanvien", "DemoController@capnhatnhanvien");

    Route::get("/xoa-sanpham/{id}", "DemoController@xoasanpham");
    Route::get("/xoa-nhanvien/{id}", "DemoController@xoanhanvien");


    Route::get("them-khachhang", "DemoController@themkhachhang");
    Route::post("them-khachhang", "DemoController@luukhachhang");


    Route::get("/sua-khachhang", "DemoController@suakhachhang");
    Route::post("/sua-khachhang", "DemoController@capnhatkhachhang");
    Route::get("/xoa-khachhang  /{id}", "DemoController@xoakhachhang");

});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('theme.index');




Route::get("/student","StudentController@list");
Route::get("them-student", "StudentController@themstudent");
Route::post("them-student", "StudentController@luustudent");


Route::get("/sua-student", "StudentController@suastudent");
Route::post("/sua-student", "StudentController@capnhatstudent");
