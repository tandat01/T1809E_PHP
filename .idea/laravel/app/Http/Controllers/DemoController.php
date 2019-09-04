<?php

namespace App\Http\Controllers;

use App\Chitiet;
use App\Danhmuc;
use App\Goido;
use App\Khachhang;
use App\Nhanvien;
use App\phonebook;
use App\Sanpham;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function helloWorld(){
        $student=phonebook::all();
        return view("demo",compact("student"));
    }
    public function danhMuc(){
        $danhmucs=Danhmuc::all();
        return view("menu.list",compact("danhmucs"));
    }
    public function sanpham(){
        $sanphams=Sanpham::all();
        return view("menu.sanpham",compact("sanphams"));
    }
    public function nhanvien(){
        $nhanviens=Nhanvien::all();
        return view("menu.nhanvien",compact("nhanviens"));
    }
    public function Themdanhmuc(){
        $danhmucs=Danhmuc::all();
        return view("form.form",compact("danhmucs"));
    }
    public function luudanhmuc(Request $request)
    {
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "danhmuc_id" => "required|numeric",
            "danhmuc_name" => "required|string|unique:danhmuc",
            "content" => "required|string",
            "images" => "required|string",
            "describe" => "required|string",
            "status" => "required|string"
        ];
        $this->validate($request, $messages, $rules);
        try {
            Danhmuc::create([
                "danhmuc_name" => $request->get("danhmuc_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        

        return redirect("/danh-muc");

    }

    function themsanpham()
    {
        $sanphams = Sanpham::all();
        $danhmucs = Danhmuc::all();
        return view("form.sanpham", compact("sanphams", "danhmucs"));
    }
    function luusanpham(Request $request){
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "sanpham_id" => "required|numeric",
            "sanpham_name" => "required|string|unique:Sanpham",
            "detail" => "required|string",
            "price" => "required|string|numeric",
            "status" => "required|string",
            "image" => "required|string",
            "date" => "required|string",
            "piriceNew" => "required|string",
            "order" => "required|string",
        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            Sanpham::create([
                "sanpham_name" => $request->get("sanpham_name"),
                "detail" => $request->get("detail"),
                "price" => $request->get("price"),
                "status" => $request->get("status"),
                "image" => $request->get("image"),
                "date" => $request->get("date"),
                "proceNew" => $request->get("priceNew"),
                "order" => $request->get("order"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/san-pham");
    }
    public function themnhanvien(){
        $nhanviens=Nhanvien::all();
        return view("form.nhanvien",compact("nhanviens"));
    }
    public function luunhanvien(Request $request){
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "nhanvien_id" => "required|numeric",
            "nhanvien_name" => "required|string|unique:Nhanvien",
            "sex" => "required|string",
            "birthday" => "required|string|numeric",
            "address" => "required|string",
            "email" => "required|string",
            "phonenumber" => "required|string",
        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            Sanpham::create([
                "nhanvien_name" => $request->get("nhanvien_name"),
                "sex" => $request->get("sex"),
                "birthday" => $request->get("birthday"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "phonenumber" => $request->get("phonenumber")
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/nhan-vien ");
    }
    public function suadanhmuc(Request $request){
        $danhmuc_id=$request->get("id");
        $danhmucs=Danhmuc::find($danhmuc_id);
        return view("form.form_edit",compact("danhmucs"));
    }

    public function capnhatdanhmuc(Request $request){
        $danhmuc=Danhmuc::find($request->get("danhmuc_id"));
        
        $messages=[
            "required"=>"Bắt buộc phải nhập thông tin",
            "string"=>"Phải nhập vào 1 chuỗi",
            "numeric"=>"Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max"=>"Tối đa 255 ký tự",
            "unique"=>"Đã tồn tại giá trị này"
        ];



        $rules=[
            "danhmuc_name"=>"required|string|max:255|unique:danhmuc,danhmuc_name,".$danhmuc->danhmuc_id.",danhmuc_id",
            "content"=>"required|numeric|min:0",
            "images"=>"required|numeric",
            "describe"=>"required|numeric",
            "status"=>"required|numeric"
        ];
        $this->validate($request,$messages,$rules);
        try{
            $danhmuc->update([
                "danhmuc_name" => $request->get("danhmuc_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ]);

        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("/danh-muc");
    }
    public function xoadanhmuc($id){
        $danhmucs=Danhmuc::find($id);
        try{
            //cach 1//xoa men
            $danhmucs->active=0;
            $danhmucs->save();
            //cach 2
            //$book->update("active",Book::DEACTIVE);
            //$book->delete();
        }catch (\Exception $e){
            //die($e->getMessage());
            return redirect("danh-muc")->withErrors(["fail"=>$e->getMessage()]);
        }
        return redirect("danh-muc")->with("success","Delete successfully");

    }

}
