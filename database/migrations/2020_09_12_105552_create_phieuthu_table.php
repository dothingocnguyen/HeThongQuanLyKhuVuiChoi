<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuthuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuthu', function (Blueprint $table) {
            $table->bigIncrements('pt_id');
            $table->datetime("pt_ngaygiolap");
            $table->integer("pt_tongtien");
            $table->bigInteger("nv_id")->unsigned();
            $table->foreign('nv_id')->references('nv_id')->on('nhanvien')->onDelete('cascade');
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
        Schema::dropIfExists('phieuthu');
    }
}
