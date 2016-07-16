<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

    public function up()
    {
        Schema::create('photos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('saison_id')->unsigned();
            $table->string('imageURL');
        });

        Schema::enableForeignKeyConstraints();

        Schema::table('photos', function(Blueprint $table) {
            $table->foreign('saison_id')->references('id')->on('saisons')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
         });
    }

    public function down()
    {
          Schema::table('photos', function(Blueprint $table) {
            $table->dropForeign('photos_saison_id_foreign');
        });
        Schema::drop('photos');
    }
}