<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goido extends Model
{
    protected $table= ' goido';
    protected $primaryKey = ' Goido_id';
    protected  $fillable =[
        " Goido_name",
        "Khachhang_id",
        "TotalMoney",
        "Date",
        "Status",
        "active",
    ];
}
