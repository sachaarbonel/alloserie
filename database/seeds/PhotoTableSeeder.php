<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Photo;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		
		$json = File::get("database/data/photos.json");
        $data = json_decode($json,true);
        Photo::insert($data);
}
}