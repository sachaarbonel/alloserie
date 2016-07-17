<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genre_serie', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('genre_id')->unsigned()->index();
            $table->integer('serie_id')->unsigned()->index();
        });

      
       Schema::table('genre_serie', function(Blueprint $table) {
            $table->foreign('serie_id')->references('id')->on('series')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
            $table->foreign('genre_id')->references('id')->on('genres')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genre_serie', function(Blueprint $table) {
            $table->dropForeign('genre_serie_genre_id_foreign');
        });
        Schema::drop('genre_serie');
    }
}
