<?php

use Illuminate\Database\Seeder;
use App\Api\v1\Photo;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('photos')->delete();
		$json = File::get("database/data/photos.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

		// PhotoTableSeeder
		Photo::create(array(
			'id' => $obj->PhotoID,
            'imageURL' => $obj->imageURL,
            'saison_id' => $obj->SaisonID
			));
								}
	}
}