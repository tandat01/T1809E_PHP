<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    protected $table= 'danhmuc';
    protected $primaryKey = 'Danhmuc_id';
    protected  $fillable =[
        "danhmuc_name",
        "Sanpham_id",
        "content",
        "images",
        "describe",
        "status",
        "active",
    ];
    public Const ACTIVE = 1;
    public Const DEACTIVE = 0;
    public Const DEACTIVE2 = 2;

}
