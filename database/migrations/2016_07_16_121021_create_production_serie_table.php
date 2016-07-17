<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('production_serie', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('production_id')->unsigned()->index();
            $table->integer('serie_id')->unsigned()->index();
        });

        
       Schema::table('production_serie', function(Blueprint $table) {
            $table->foreign('production_id')->references('id')->on('productions');
            $table->foreign('serie_id')->references('id')->on('series');
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
            Schema::table('production_serie', function(Blueprint $table) {
            $table->dropForeign('production_serie_production_id_foreign');
        });

        Schema::drop('production_serie');
    }
}
