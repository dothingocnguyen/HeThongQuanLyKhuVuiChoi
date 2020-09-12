<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->bigIncrements('nv_id');
            $table->string("nv_taikhoan");
            $table->string("nv_matkhau");
            $table->string("nv_hoten");
            $table->string("nv_gioitinh");
            $table->string("nv_diachi");
            $table->string("nv_sodienthoai");
            $table->string("nv_email");
            $table->date("nv_ngaysinh");
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
        Schema::dropIfExists('nhanvien');
    }
}
