<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= 'student';
    protected $primaryKey = 'student_id';
    protected  $fillable =[
        "student_name",
        "age",
        "address",
        "telephone",
        "active",
    ];
}
