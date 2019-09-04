<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablechitiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet', function (Blueprint $table) {
            $table->bigIncrements('chitiet_id');
            $table->unsignedBigInteger("goido_id");
            $table->unsignedBigInteger("sanpham_id");
            $table->integer("quantity");
            $table->integer("active")->default(1);
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
        Schema::dropIfExists('orderdetail');
    }
}
