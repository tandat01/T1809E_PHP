<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu', function (Blueprint $table) {
            $table->foreign("sanpham_id")->references("sanpham_id")->on("sanpham");
            $table->foreign("nhanvien_id")->references("nhanvien_id")->on("nhanvien");
            $table->foreign("khachhang_id")->references("khachhang_id")->on("khachhang");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu', function (Blueprint $table) {
            $table->dropForeign(["sanpham_id"]);
            $table->dropForeign(["nhanvien_id"]);
            $table->dropForeign(["khachhang_id"]);
        });
    }
}
