<?php

use Illuminate\Database\Seeder;
use App\Teaser;

class TeaserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('teasers')->delete();

		// TeaserTableSeeder
		Teaser::create(array(
			));
	}
}