<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActeursTable extends Migration {

    public function up()
    {
        Schema::create('acteurs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('photoURL');
            
        });
    }

    public function down()
    {
        Schema::drop('acteurs');
    }
}