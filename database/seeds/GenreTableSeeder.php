<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Genre;

class GenreTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/genres.json");
        $data = json_decode($json,true);
        Genre::insert($data);
}
}