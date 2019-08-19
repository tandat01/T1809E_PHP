<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->bigIncrements('nhanvien_id');
            $table->string("name");
            $table->string("ghi_do");
            $table->string("gia");
            $table->string("phan_hoi");
            $table->string("chon_ban");
            $table->unsignedBigInteger("khachhang_id");
            $table->unsignedTinyInteger("active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
