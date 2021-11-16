<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{

    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('visi');
            $table->string('misi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
}
