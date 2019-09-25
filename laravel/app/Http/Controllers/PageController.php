<?php

namespace App\Http\Controllers;

use App\Danhmuc;
use App\Sanpham;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function trangchu(){
        $danhmucs=Danhmuc::all();
        return view("admin.menu",['danhmucs'=>$danhmucs,]);
    }
    public function timkiem(Request $request){
    $tukhoa=$request->get('tukhoa');
    $sanpham=Sanpham::where('sanpham_name','like',"%$tukhoa%")->take(5)->get();

    return view("admin.timkiem",['sanpham'=>$sanpham,'tukhoa'=>$tukhoa]);
    }
}
