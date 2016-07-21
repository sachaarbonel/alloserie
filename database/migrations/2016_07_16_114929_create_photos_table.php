<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

    public function up()
    {
        Schema::create('photos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('saison_id')->unsigned()->index();
            $table->string('imageURL');
            $table->string('numero_saison');
        });

       

        Schema::table('photos', function(Blueprint $table) {
            $table->foreign('saison_id')->references('id')->on('saisons');
         });

         Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
          Schema::table('photos', function(Blueprint $table) {
            $table->dropForeign('photos_saison_id_foreign');
        });
        Schema::drop('photos');
    }
}