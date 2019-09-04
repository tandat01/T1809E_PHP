<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $table= 'nhanvien';
    protected $primaryKey = 'Nhanvien_id';
    protected  $fillable =[
        "Nhanvien_name",
        "sex",
        "Birthday",
        "Address",
        "Email",
        "PhoneNumber",
        "active",
    ];
}
