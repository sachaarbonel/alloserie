<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreateurSerieTable extends Migration {

	public function up()
	{
		Schema::create('createur_serie', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('createur_id')->unsigned();
			$table->integer('serie_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('createur_serie');
	}
}