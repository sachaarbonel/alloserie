<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaisonsTable extends Migration {

	public function up()
	{
		Schema::create('saisons', function(Blueprint $table) {
			$table->increments('id');
			$table->float('note_spectateurs');
			$table->integer('serie_id')->unsigned();
			$table->integer('numero');
		});
	}

	public function down()
	{
		Schema::drop('saisons');
	}
}