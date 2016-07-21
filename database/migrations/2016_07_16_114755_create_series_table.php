<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeriesTable extends Migration {

    public function up()
    {
        Schema::create('series', function(Blueprint $table) {
            $table->increments('id');
            $table->float('note_presse');
            $table->float('note_spectateurs');
            $table->integer('nombre_fan');
            $table->string('nationalite');
            $table->string('statut');
            $table->integer('format');
            $table->string('synopsis');
            $table->string('miniatureURL');
            $table->string('nom');
            $table->string('posterURL');
        
        });
    }

    public function down()
    {
        Schema::drop('series');
    }
}