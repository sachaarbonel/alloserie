<?php

use Illuminate\Database\Seeder;
use \GenreSerie;

class GenreSerieTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('genre_serie')->delete();

		// GenreSeriePivotTableSeeder
		GenreSerie::create(array(
			));
	}
}