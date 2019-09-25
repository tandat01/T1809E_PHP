<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("theme.index");
    }
    public function login(){
        return view("theme.login");
    }
    public function trangchu(){
        return view("admin.trangchu");
    }
    public function menu(){
        return view("admin.menu");
    }
    public function gallery(){
        return view("admin.gallery");
    }
    public function chitiet(){
        return view("admin.chitiet");
    }
    public function sukien(){
        return view("admin.sukien");
    }
    public function abc(){
        return view("admin.abc");
    }
    public function about(){
        return view("admin.about");
    }
}
