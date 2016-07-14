<?php

use Illuminate\Database\Seeder;
use App\Api\v1\GenreTable;

class GenreTableSeeder extends Seeder {

	public function run()
	{
		DB::table('genres')->delete();
		$json = File::get("database/data/genres.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// GenreTableSeeder
		Genre::create(array(
			'id' => $obj->GenreID,
            'nom' => $obj->nomGenre
			));
								}
	}
}