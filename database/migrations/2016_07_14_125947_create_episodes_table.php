<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEpisodesTable extends Migration {

	public function up()
	{
		Schema::create('episodes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('saison_id')->unsigned();
			$table->string('synopsis');
			$table->string('nom');
			$table->string('numero');
		});
	}

	public function down()
	{
		Schema::drop('episodes');
	}
}