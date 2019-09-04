<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table= 'sanpham';
    protected $primaryKey = 'Sanpham_id';
    protected  $fillable =[
        "Sanpham_name",
        "Khachhang_id",
        "Detail",
        "Image",
        "Price",
        "PriceNew",
        "Date",
        "Order",
        "Status",
        "active",
    ];
}
