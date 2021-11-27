<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoKandidat extends Migration
{
    public function up()
    {
        Schema::table('kandidat', function(Blueprint $table){
            $table->string('foto');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
}
