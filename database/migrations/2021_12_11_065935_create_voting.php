<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kandidat_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->integer('status')->unsigned();
            
            $table->foreign('user_id')->references('id')->on('users')->onDetele('restrict');
            $table->foreign('kandidat_id')->references('id')->on('kandidat')->onDetele('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voting');
    }
}
