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
        $danhmucs=Danhmuc::paginate(20);
        return view("menu.list",compact("danhmucs"));
    }
    public function sanpham(){
        $sanphams=Sanpham::paginate(20);
        return view("menu.sanpham",compact("sanphams"));
    }
    public function nhanvien(){
        $nhanviens=Nhanvien::paginate(20);
        return view("menu.nhanvien",compact("nhanviens"));
    }
    public function khachhang(){
    $khachhangs=Khachhang::paginate(20);
    return view("menu.khachhang",compact("khachhangs"));
}


    //----danh muc
    public function Themdanhmuc(){
        $danhmucs=Danhmuc::all();
        return view("them.form",compact("danhmucs"));
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
            "danhmuc_name" => "required|string|unique:Danhmuc",
            "content" => "required|string",
            "images" => "required|string",
            "describe" => "required|string",
            "status" => "required|numeric"
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
    function suadanhmuc(Request $request)
    {
        $danhmuc_id = $request->get("id");
        $danhmuc =Danhmuc::find($danhmuc_id);
        return view("form.form_edit", compact("danhmuc"));
    }
    // luu lai thong tin da sua
    function capnhatdanhmuc(Request $request)
    {
        $danhmuc = Danhmuc::find($request->get("danhmuc_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//        $rules = [
//            "danhmuc_id" => "required|numeric",
//            "danhmuc_name" => "required|string|unique:Danhmuc",
//            "content" => "required|string",
//            "images" => "required|string",
//            "describe" => "required|string",
//            "status" => "required|numeric"
//        ];
//        // dd($request->all());
//        $this->validate($request, $rules, $messages);
        try {
            //dd($request->all());
            $danhmuc->update([
                "danhmuc_name" => $request->get("danhmuc_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/danh-muc");
    }


    public function xoadanhmuc($id)
    {
        $danhmucs = Danhmuc::find($id);
        try {
            //cach 1//xoa men
            $danhmucs->active = 0;
            $danhmucs->save();
            //cach 2
            //$danhmucs->update("active",Danhmuc::DEACTIVE);
            //$danhmucs->delete();
        } catch (\Exception $e) {
            //die($e->getMessage());
            return redirect("danh-muc")->withErrors(["fail" => $e->getMessage()]);
        }
        return redirect("danh-muc")->with("success", "Delete successfully");

    }





//-----san pham
    public function themsanpham()
    {
        $sanphams = Sanpham::orderby("sanpham_id","ASC")->get();
        $danhmucs = Danhmuc::orderby("danhmuc_id","ASC")->get();
        //dd($sanphams);
        return view("them.sanpham", compact("sanphams","danhmucs"));
    }
    public function luusanpham(Request $request)
    {
       // dd($request->all());
      /*  $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "nhập vào một số",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "sanpham_name" => "required|string|unique:sanpham",
            "detail" => "required|string",
            "price" => "required|numeric",
            "status" => "required|numeric",
            "images" => "required|string",
            "date" => "required",
            "pricenew" => "required|numeric"
        ];
        $this->validate($request,$rules,$messages);*/
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Sanpham::create([
                "sanpham_name" => $request->get("sanpham_name"),
                "detail" => $request->get("detail"),
                "price" => $request->get("price"),
                "status" => $request->get("status"),
                "image" => $request->get("image"),
                "date" => $request->get("date"),
                "pricenew" => $request->get("pricenew"),
                "danhmuc_id" => $request->get("danhmuc_id"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/san-pham");
    }
    function suasanpham(Request $request)
    {
        $sanpham_id = $request->get("id");
        $sanpham =Sanpham::find($sanpham_id);
        return view("form.form_sp", compact("sanpham"));
    }
    // luu lai thong tin da sua
    function capnhatsanpham(Request $request)
    {
        $sanpham = Sanpham::find($request->get("sanpham_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//        $rules = [
//            "danhmuc_id" => "required|numeric",
//            "danhmuc_name" => "required|string|unique:Danhmuc",
//            "content" => "required|string",
//            "images" => "required|string",
//            "describe" => "required|string",
//            "status" => "required|numeric"
//        ];
//        // dd($request->all());
//        $this->validate($request, $rules, $messages);
        try {
            //dd($request->all());
            $sanpham->update([
                "sanpham_name" => $request->get("sanpham_name"),
                "detail" => $request->get("detail"),
                "image" => $request->get("image"),
                "status" => $request->get("status"),
                "pricenew" => $request->get("pricenew"),
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/san-pham");
    }
    public function xoasanpham($id)
    {
        $sanphams = Sanpham::find($id);
        try {
            //cach 1//xoa men
            $sanphams->active = 0;
            $sanphams->save();
            //cach 2
            //$danhmucs->update("active",Danhmuc::DEACTIVE);
            //$danhmucs->delete();
        } catch (\Exception $e) {
            //die($e->getMessage());
            return redirect("san-pham")->withErrors(["fail" => $e->getMessage()]);
        }
        return redirect("san-pham")->with("success", "Delete successfully");

    }










    //-------nhan vien
    public function themnhanvien(){
        $nhanviens=Nhanvien::all();
        return view("them.nhanvien",compact("nhanviens"));
    }
    public function luunhanvien(Request $request){
        /*$messages = [
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
            "birthday" => "required|numeric",
            "address" => "required|string",
            "email" => "required|string",
            "phonenumber" => "required|string",
        ];
        $this->validate($request, $messages, $rules);*/
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Nhanvien::create([
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
    function suanhanvien(Request $request)
    {
        $nhanvien_id = $request->get("id");
        $nhanvien =Nhanvien::find($nhanvien_id);
        return view("form.form_nv", compact("nhanvien"));
    }
    // luu lai thong tin da sua
    function capnhatnhanvien(Request $request)
    {
        $nhanvien = Nhanvien::find($request->get("nhanvien_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//        $rules = [
//            "danhmuc_id" => "required|numeric",
//            "danhmuc_name" => "required|string|unique:Danhmuc",
//            "content" => "required|string",
//            "images" => "required|string",
//            "describe" => "required|string",
//            "status" => "required|numeric"
//        ];
//        // dd($request->all());
//        $this->validate($request, $rules, $messages);
        try {
            //dd($request->all());
            $nhanvien->update([
                "nhanvien_name" => $request->get("nhanvien_name"),
                "sex" => $request->get("sex"),
                "birthday" => $request->get("birthday"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "phonenumber" => $request->get("phonenumber"),
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/nhan-vien");
    }
    public function xoanhanvien($id)
    {
        $nhanviens = Nhanvien::find($id);
        try {
            //cach 1//xoa men
            $nhanviens->active = 0;
            $nhanviens->save();
            //cach 2
            //$danhmucs->update("active",Danhmuc::DEACTIVE);
            //$danhmucs->delete();
        } catch (\Exception $e) {
            //die($e->getMessage());
            return redirect("nhan-vien")->withErrors(["fail" => $e->getMessage()]);
        }
        return redirect("nhan-vien")->with("success", "Delete successfully");

    }



    //khachhang
    public function themkhachhang(){
        $khachhangs=Khachhang::all();
        return view("them.khachhang",compact("khachhangs"));
    }
    public function luukhachhang(Request $request){
        /*$messages = [
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
            "birthday" => "required|numeric",
            "address" => "required|string",
            "email" => "required|string",
            "phonenumber" => "required|string",
        ];
        $this->validate($request, $messages, $rules);*/
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Khachhang::create([
                "khachhang_name" => $request->get("khachhang_name"),
                "birthday" => $request->get("birthday"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "comment" => $request->get("comment"),
                "phonenumber" => $request->get("phonenumber")
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/khach-hang ");
    }
    function suakhachhang(Request $request)
    {
        $khachhang_id = $request->get("id");
        $khachhang =Khachhang::find($khachhang_id);
        return view("form.form_kh", compact("khachhang"));
    }
    // luu lai thong tin da sua
    function capnhatkhachhang(Request $request)
    {
        $khachhang = Khachhang::find($request->get("khachhang_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//        $rules = [
//            "danhmuc_id" => "required|numeric",
//            "danhmuc_name" => "required|string|unique:Danhmuc",
//            "content" => "required|string",
//            "images" => "required|string",
//            "describe" => "required|string",
//            "status" => "required|numeric"
//        ];
//        // dd($request->all());
//        $this->validate($request, $rules, $messages);
        try {
            //dd($request->all());
            $khachhang->update([
                "khachhang_name" => $request->get("khachhang_name"),
                "birthday" => $request->get("birthday"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "comment" => $request->get("comment"),
                "phonenumber" => $request->get("phonenumber"),
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/khach-hang");
    }
    public function xoakhachhang($id)
    {
        $khachhangs = Khachhang::find($id);
        try {
            //cach 1//xoa men
            $khachhangs->active = 0;
            $khachhangs->save();
            //cach 2
            //$danhmucs->update("active",Danhmuc::DEACTIVE);
            //$danhmucs->delete();
        } catch (\Exception $e) {
            //die($e->getMessage());
            return redirect("khach-hang")->withErrors(["fail" => $e->getMessage()]);
        }
        return redirect("khach-hang")->with("success", "Delete successfully");

    }


}
