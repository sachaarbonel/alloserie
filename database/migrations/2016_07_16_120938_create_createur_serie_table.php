<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateurSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createur_serie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('createur_id')->unsigned();
            $table->integer('serie_id')->unsigned();
        });

        Schema::enableForeignKeyConstraints();
        Schema::table('createur_serie', function (Blueprint $table) {
            $table->foreign('createur_id')->references('id')->on('createurs')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
            $table->foreign('serie_id')->references('id')->on('series')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('createur_serie', function(Blueprint $table) {
            $table->dropForeign('createur_serie_serie_id_foreign');
        });

         Schema::drop('createur_serie');
    }
}
