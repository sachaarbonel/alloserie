<?php

use Illuminate\Database\Seeder;
use App\Api\V1\GenreSerie;

class GenreSerieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('genre_serie')->delete();
		$json = File::get("database/data/genresSerie.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// GenreSeriePivotTableSeeder
		GenreSerie::create(array(
			'id' => $obj->GenreSerieID,
            'genre_id' => $obj->GenreID,
            'serie_id' => $obj->SerieID
			));
								}
	}
}
}