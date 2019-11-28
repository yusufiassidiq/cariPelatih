<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->unsignedbigInteger('pelatih_id');
            $table->foreign('pelatih_id')
                ->references('id')->on('users');
            $table->string('namaPelatih')->nullable();
            $table->datetime('tanggal')->nullable();
            $table->integer('durasi')->nullable();
            $table->string('catatan')->nullable();
            $table->string('buktiPembayaran')->nullable();
            $table->string('status')->nullable();
            $table->integer('biaya')->nullable();
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
        Schema::dropIfExists('booking');
    }
}
