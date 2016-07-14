<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('genres')->delete();

		// GenreTableSeeder
		Genre::create(array(
			));
	}
}