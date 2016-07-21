<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeasersTable extends Migration {

    public function up()
    {
        Schema::create('teasers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('teaserable_id')->unsigned()->index();
            $table->string('teaserable_type');
            $table->string('videoURL');
        });
    }

    public function down()
    {
        Schema::drop('teasers');
    }
}