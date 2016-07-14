<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('photos')->delete();

		// PhotoTableSeeder
		Photo::create(array(
			));
	}
}