<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablesanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->foreign("danhmuc_id")->references("danhmuc_id")->on("danhmuc");
            //$table->foreign("khachhang_id")->references("khachhang_id")->on("khachhang");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->dropForeign(["danhmuc_id"]);
            //$table->dropForeign(["khachhang_id"]);
        });
    }
}
