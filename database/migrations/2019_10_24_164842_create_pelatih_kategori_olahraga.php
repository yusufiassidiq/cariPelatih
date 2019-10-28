<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihKategoriOlahraga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatih_kategoriOlahraga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('pelatih_id');
            $table->foreign('pelatih_id')
                ->references('id')->on('users');
            $table->unsignedbigInteger('namaOlahraga_id');
            $table->foreign('namaOlahraga_id')
                ->references('id')->on('kategori_olahraga');
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
        Schema::dropIfExists('pelatih_kategori_olahraga');
    }
}