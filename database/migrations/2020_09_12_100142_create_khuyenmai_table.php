<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->bigIncrements('km_id');
            $table->string('km_ten');
            $table->string("km_code");
            $table->text("km_mota");
            $table->integer("km_giatri");
            $table->date("km_ngaybatdau");
            $table->date("km_ngayketthuc");
            $table->integer("km_trangthai")->default(1);
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
        Schema::dropIfExists('khuyenmai');
    }
}
