<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilih extends Migration
{
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('nama');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('angkatan');

            $table->foreign('user_id')->references('id')->on('users')->onDetele('restrict');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilih');
    }
}
