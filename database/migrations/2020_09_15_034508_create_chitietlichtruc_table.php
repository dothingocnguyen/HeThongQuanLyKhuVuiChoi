<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietlichtrucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietlichtruc', function (Blueprint $table) {
            $table->bigInteger('nv_id');
            $table->bigInteger('kv_id');
            $table->bigInteger('lt_id');
            $table->primary(['nv_id','kv_id','lt_id']);
            $table->date('ctlt_ngaytruc');
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
        Schema::dropIfExists('chitietlichtruc');
    }
}
