<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table= 'khachhang';
    protected $primaryKey = ' Khachhang_id';
    protected  $fillable =[
        " Khachhang_name",
        "Sanpham_id",
        "Birthday",
        "Address",
        "Email",
        "PhoneNumber",
        "active",
    ];
}
