<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->foreignID('parkiran_id')->references('id')->on('parkirans');
            $table->string('slug')->unique();
            $table->string('jenis_Kendaraan');
            $table->string('no_kendaraan');
            $table->integer('durasi_parkir');
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->integer('harga');
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
        Schema::dropIfExists('kendaraans');
    }
}
