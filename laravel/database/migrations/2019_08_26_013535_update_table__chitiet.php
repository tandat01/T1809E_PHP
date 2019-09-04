<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablechitiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chitiet', function (Blueprint $table) {
            $table->foreign("goido_id")->references("goido_id")->on("goido");
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
        Schema::table('chitiet', function (Blueprint $table) {
            $table->dropForeign(["goido_id"]);
            $table->dropForeign(["sanpham_id"]);
        });
    }
}
