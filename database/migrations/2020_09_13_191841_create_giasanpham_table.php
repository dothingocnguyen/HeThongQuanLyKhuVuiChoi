<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiasanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giasanpham', function (Blueprint $table) {
            $table->bigInteger('ngay_id');
            $table->bigInteger('g_id');
            $table->primary(['ngay_id','g_id']);
            $table->string('giagoi');
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
        Schema::dropIfExists('giasanpham');
    }
}
