<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Photo;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('photos')->delete();
		$json = File::get("database/data/photos.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// PhotoTableSeeder
		Photo::create(array(
			'id' => $obj->PhotoID,
            'imageURL' => $obj->imageURL
            'saison' => $obj->SaisonID))
	/*		))->saison()->attach($obj->SaisonID);*/
								}
	}
}
}