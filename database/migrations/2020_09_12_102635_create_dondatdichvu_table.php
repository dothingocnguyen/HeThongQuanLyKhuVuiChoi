<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondatdichvuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondatdichvu', function (Blueprint $table) {
            $table->bigIncrements('d_id');
            $table->date("d_ngaylap");
            $table->date("d_ngaytochuc");
            $table->integer("d_sokhachdukien");
            $table->integer("d_trangthaithanhtoan");
            $table->text("d_ghichu");
            $table->bigInteger("g_id")->unsigned();
            $table->foreign('g_id')->references('g_id')->on('goidichvu')->onDelete('cascade');
            $table->bigInteger("kh_id")->unsigned();
            $table->foreign('kh_id')->references('kh_id')->on('khachhang')->onDelete('cascade');
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
        Schema::dropIfExists('dondatdichvu');
    }
}
