<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Teaser;

class TeaserTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/teasers.json");
        $data = json_decode($json,true);
        Teaser::insert($data);
}
}