<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHinhTroGiupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hinh_tro_giup', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('loai_tro_giup');
            $table->Integer('thu_tu');
            $table->Integer('credit');
            $table->boolean('xoa')->default(false);
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
        Schema::dropIfExists('cau_hinh_tro_giup');
    }
}
