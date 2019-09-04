<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablegoido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goido', function (Blueprint $table) {
            $table->foreign("khachhang_id")->references("khachhang_id")->on("khachhang");
            $table->foreign("nhanvien_id")->references("nhanvien_id")->on("nhanvien");
            $table->foreign("sanpham_id")->references("sanpham_id")->on("sanpham");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goido', function (Blueprint $table) {
            $table->dropForeign(["khachhang_id"]);
            $table->dropForeign(["nhanvien_id"]);
            $table->dropForeign(["sanpham_id"]);
        });
    }
}
