<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductionSerieTable extends Migration {

	public function up()
	{
		Schema::create('production_serie', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('production_id')->unsigned();
			$table->integer('serie_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('production_serie');
	}
}