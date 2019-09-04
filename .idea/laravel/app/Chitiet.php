<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitiet extends Model
{
    protected $table= ' chitiet';
    protected $primaryKey = ' Chitiet_id';
    protected  $fillable =[
        "Chitiet_name",
        "Goido_id",
        "Sanpham_id",
        "Quantity",
        "active",
    ];
}
