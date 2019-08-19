<?php

namespace App\Http\Controllers;

use App\phonebook;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function helloWorld(){
        $student=phonebook::all();
        return view("demo",compact("student"));
    }
    public function sayHello(){
        return"say Hello";
    }
}
