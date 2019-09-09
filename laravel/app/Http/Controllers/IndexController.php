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
}
