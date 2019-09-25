<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $students = Student::all();
        return view("student.student", compact("students"));
    }

    public function themstudent()
    {
        $students = Student::all();
        return view("student.nhap", compact("students"));
    }

    public function luustudent(Request $request)
    {
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
                "email" => $request->get("email"),
                "telephone" => $request->get("telephone"),
                "feedback" => $request->get("feedback"),
            ])->save();

        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/student ");
    }
}
