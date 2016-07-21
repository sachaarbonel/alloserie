<?php

use Illuminate\Database\Seeder;
use App\Api\V1\Teaser;

class TeaserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('teasers')->delete();
		$json = File::get("database/data/teasers.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// TeaserTableSeeder
		Teaser::create(array(
			'id' => $obj->TeaserID,
			'teaserable_id' => $obj->TeaserableID,
            'teaserable_type' => $obj->TeaserableType,
            'videoURL' => $obj->videoURL
			));
								}
	}
}
}