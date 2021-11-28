<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voting extends Migration
{

    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->integer('kandidat_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('kandidat_id')->references('id')->on('kandidat')->onDelete('restrict');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voting', function(Blueprint $table){
            //
        });
    }
}
