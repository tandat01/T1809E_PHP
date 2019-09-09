<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students=Student::all();
        return view("more.student",compact("students"));
    }
    public function themstudent(){
        $students=Student::all();
        return view("more.them",compact("students"));
    }
    public function luustudent(Request $request){
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
            Student::create([
                "student_name" => $request->get("student_name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone")
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/student ");
    }
    function suastudent(Request $request)
    {
        $student_id = $request->get("id");
        $student =Student::find($student_id);
        return view("more.form", compact("student"));
    }
    // luu lai thong tin da sua
    function capnhatstudent(Request $request)
    {
        $student = Student::find($request->get("student_id"));
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
            $student->update([
                "student_name" => $request->get("student_name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone"),
            ]);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/student");
    }

}
