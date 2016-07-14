<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenreSerieTable extends Migration {

	public function up()
	{
		Schema::create('genre_serie', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('genre_id')->unsigned();
			$table->integer('serie_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('genre_serie');
	}
}