<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Models\GenreSerie;

class GenreSerieTableSeeder extends Seeder {

	public function run()
	{
	$json = File::get("database/data/genresSerie.json");
        $data = json_decode($json,true);
        GenreSerie::insert($data);
}
}