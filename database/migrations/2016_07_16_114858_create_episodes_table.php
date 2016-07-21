<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEpisodesTable extends Migration {

    public function up()
    {
        Schema::create('episodes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('saison_id')->unsigned()->index();
            $table->string('synopsis');
            $table->string('numero');
        });
       
         Schema::table('episodes', function(Blueprint $table) {
            $table->foreign('saison_id')->references('id')->on('saisons');
        });
          Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
                Schema::table('episodes', function(Blueprint $table) {
            $table->dropForeign('episodes_saison_id_foreign');
        });
        Schema::drop('episodes');
    }
}