<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('kh_id');
            $table->string("kh_taikhoan");
            $table->string("kh_matkhau");
            $table->string("kh_hoten");
            $table->string("kh_gioitinh");
            $table->string("kh_diachi");
            $table->string("kh_sodienthoai");
            $table->string("kh_email");
            $table->date("kh_ngaysinh");
            $table->bigInteger("loaikh_id")->unsigned();
            $table->foreign('loaikh_id')->references('loaikh_id')->on('loaikhachhang')->onDelete('cascade');
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
        Schema::dropIfExists('khachhang');
    }
}
