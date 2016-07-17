<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActeursTable extends Migration {

    public function up()
    {
        Schema::create('acteurs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('saison_id')->unsigned()->index();
            $table->string('nom');
            $table->string('role');
            $table->string('photoURL');
            
        });

           
           Schema::table('acteurs', function(Blueprint $table) {
            $table->foreign('saison_id')->references('id')->on('saisons');
         });
           Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
            Schema::table('acteurs', function(Blueprint $table) {
            $table->dropForeign('acteurs_saison_id_foreign');
        });
        Schema::drop('acteurs');
    }
}