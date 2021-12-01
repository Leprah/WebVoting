<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatus extends Migration
{
    public function up()
    {
        Schema::table('pemilih', function(Blueprint $table){
            $table->string('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('status');
    }
}
