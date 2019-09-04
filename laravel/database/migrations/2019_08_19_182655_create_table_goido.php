<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablegoido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goido', function (Blueprint $table) {
            $table->bigIncrements('goido_id');
            $table->string("goido_name");
            $table->unsignedBigInteger("khachhang_id");
            $table->unsignedBigInteger("nhanvien_id");
            $table->unsignedBigInteger("sanpham_id");
            $table->decimal("totalmoney");
            $table->date("date");
            $table->string("status");
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
        Schema::dropIfExists('order');
    }
}
