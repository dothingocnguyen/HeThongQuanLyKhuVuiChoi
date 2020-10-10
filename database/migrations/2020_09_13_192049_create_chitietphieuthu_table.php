<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietphieuthuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chittietphieuthu', function (Blueprint $table) {
            $table->bigInteger('pt_id');
            $table->bigInteger('sp_id');
            $table->primary(['pt_id','sp_id']);
            $table->string('soluongsanpham');
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
        Schema::dropIfExists('chittietphieuthu');
    }
}
