<?php
use Illuminate\Database\Seeder;
use App\Api\V1\Models\Serie;


class SerieTableSeeder extends Seeder {

	public function run()
	{
		$json = File::get("database/data/series.json");
        $data = json_decode($json,true);
        Serie::insert($data);
}
}