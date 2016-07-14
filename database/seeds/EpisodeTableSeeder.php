<?php

use Illuminate\Database\Seeder;
use App\Episode;

class EpisodeTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('episodes')->delete();

		// EpisodeTableSeeder
		Episode::create(array(
			));
	}
}