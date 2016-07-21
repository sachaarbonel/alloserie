<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaisonsTable extends Migration {

    public function up()
    {
        Schema::create('saisons', function(Blueprint $table) {
            $table->increments('id');
            $table->float('note_spectateurs');
            $table->integer('serie_id')->unsigned()->index();
            $table->integer('numero');
        });
      

         Schema::table('saisons', function(Blueprint $table) {
         $table->foreign('serie_id')->references('id')->on('series');
         });
           Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
        
            Schema::table('saisons', function(Blueprint $table) {
            $table->dropForeign('saisons_serie_id_foreign');
        });
            Schema::drop('saisons');

    }
}