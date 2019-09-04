<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('sanpham_id');
            $table->string("sanpham_name");
            $table->unsignedBigInteger("danhmuc_id");
            $table->string("detail");
            $table->decimal("price");
            $table->string("status");
            $table->binary("image");
            $table->Date("date");
            $table->decimal("priceNew");
            $table->string("order");
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
        Schema::dropIfExists('Product');
    }
}
