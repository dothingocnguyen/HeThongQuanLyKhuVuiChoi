<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoidichvuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goidichvu', function (Blueprint $table) {
            $table->bigIncrements('g_id');
            $table->string("g_thongtingoi");
            $table->integer("g_sokhachkhachtoithieu");
            $table->integer("g_sokhachtoida");
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
        Schema::dropIfExists('goidichvu');
    }
}
