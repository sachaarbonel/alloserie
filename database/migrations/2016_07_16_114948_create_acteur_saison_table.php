<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActeurSaisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acteur_saison', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acteur_id')->unsigned()->index();
            $table->integer('saison_id')->unsigned()->index();
            $table->string('role');
        });

       
        Schema::table('acteur_saison', function (Blueprint $table) {
            $table->foreign('acteur_id')->references('id')->on('acteurs')
                        ->onDelete('cascade')
                        ->onUpdate('restrict');
            $table->foreign('saison_id')->references('id')->on('saisons')
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
        Schema::table('acteur_saison', function(Blueprint $table) {
            $table->dropForeign('acteur_saison_saison_id_foreign');
        });

         Schema::drop('acteur_saison');
    }
}
