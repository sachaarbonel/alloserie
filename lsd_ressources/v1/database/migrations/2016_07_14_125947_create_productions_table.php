<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductionsTable extends Migration {

	public function up()
	{
		Schema::create('productions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('imageURL');
		});
	}

	public function down()
	{
		Schema::drop('productions');
	}
}