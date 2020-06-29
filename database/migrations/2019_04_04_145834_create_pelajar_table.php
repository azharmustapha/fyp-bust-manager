<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajar', function (Blueprint $table) {
            $table->increments('pelajar_id');
            $table->string('pelajar_nama');
            $table->string('sekolah_nama');
            $table->string('full_name');
            $table->string('qrcode');
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
        Schema::dropIfExists('pelajar');
    }
}
