<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonPelatihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_pelatih', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('class_user_id')->default('2');
            $table->string('status')->default('Menunggu Konfirmasi');
            // $table->foreign('class_user_id')->references('id')->on('class_users');
            $table->string('email')->unique();
            $table->string('profpic')->default('defaultPicture.jpg');
            $table->string('cv')->default('defaultCV.jpg');
            $table->string('telp')->nullable();
            $table->integer('tarif')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('calon_pelatih');
    }
}
