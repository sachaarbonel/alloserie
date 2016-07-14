<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('saisons', function(Blueprint $table) {
			$table->foreign('serie_id')->references('id')->on('series')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->foreign('saison_id')->references('id')->on('series')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('acteurs', function(Blueprint $table) {
			$table->foreign('saison_id')->references('id')->on('saisons')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('episodes', function(Blueprint $table) {
			$table->foreign('saison_id')->references('id')->on('saisons')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('createur_serie', function(Blueprint $table) {
			$table->foreign('createur_id')->references('id')->on('createurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('createur_serie', function(Blueprint $table) {
			$table->foreign('serie_id')->references('id')->on('series')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('genre_serie', function(Blueprint $table) {
			$table->foreign('genre_id')->references('id')->on('genres')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('genre_serie', function(Blueprint $table) {
			$table->foreign('serie_id')->references('id')->on('series')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('production_serie', function(Blueprint $table) {
			$table->foreign('production_id')->references('id')->on('productions')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('production_serie', function(Blueprint $table) {
			$table->foreign('serie_id')->references('id')->on('series')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('saisons', function(Blueprint $table) {
			$table->dropForeign('saisons_serie_id_foreign');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->dropForeign('photos_saison_id_foreign');
		});
		Schema::table('acteurs', function(Blueprint $table) {
			$table->dropForeign('acteurs_saison_id_foreign');
		});
		Schema::table('episodes', function(Blueprint $table) {
			$table->dropForeign('episodes_saison_id_foreign');
		});
		Schema::table('createur_serie', function(Blueprint $table) {
			$table->dropForeign('createur_serie_createur_id_foreign');
		});
		Schema::table('createur_serie', function(Blueprint $table) {
			$table->dropForeign('createur_serie_serie_id_foreign');
		});
		Schema::table('genre_serie', function(Blueprint $table) {
			$table->dropForeign('genre_serie_genre_id_foreign');
		});
		Schema::table('genre_serie', function(Blueprint $table) {
			$table->dropForeign('genre_serie_serie_id_foreign');
		});
		Schema::table('production_serie', function(Blueprint $table) {
			$table->dropForeign('production_serie_production_id_foreign');
		});
		Schema::table('production_serie', function(Blueprint $table) {
			$table->dropForeign('production_serie_serie_id_foreign');
		});
	}
}