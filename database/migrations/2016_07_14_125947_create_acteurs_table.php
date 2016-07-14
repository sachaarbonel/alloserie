<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActeursTable extends Migration {

	public function up()
	{
		Schema::create('acteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('saison_id')->unsigned();
			$table->string('nom');
			$table->string('role');
			$table->string('photoURL');
		});
	}

	public function down()
	{
		Schema::drop('acteurs');
	}
}