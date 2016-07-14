<?php

use Illuminate\Database\Seeder;
use App\Createur;

class CreateurTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('createurs')->delete();

		// CreateurTableSeeder
		Createur::create(array(
			));
	}
}