<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipeKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tipe');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}
