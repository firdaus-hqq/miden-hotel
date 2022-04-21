<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kamar_id');
            $table->foreign('kamar_id')->references('id')->on('kamar')->onDelete('cascade');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->integer('jumlah_kamar');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->string('nama_tamu');
            $table->integer('harga');
            $table->enum('status', ['menunggu', 'checkin', 'checkout']);
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
        Schema::dropIfExists('form');
    }
}
