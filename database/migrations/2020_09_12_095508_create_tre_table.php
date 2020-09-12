<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tre', function (Blueprint $table) {
            $table->bigIncrements('t_id');
            $table->string("t_ten");
            $table->date("t_ngaysinh");
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
        Schema::dropIfExists('tre');
    }
}
