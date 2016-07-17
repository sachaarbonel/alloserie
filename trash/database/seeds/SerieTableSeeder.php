<?php
use Illuminate\Database\Seeder;
use App\Api\V1\Serie;


class SerieTableSeeder extends Seeder {

	public function run()
	{
		DB::table('series')->delete();
		$json = File::get("database/data/series.json");
        $data = json_decode($json);
        if (is_array($data) || is_object($data))
	{
        foreach ($data as $obj) {

		// SerieTableSeeder
		Serie::create(array(
			'id' => $obj->SerieID,
			'note_presse' => $obj->NotePresse,
            'note_spectateurs' => $obj->NoteSpectateurs,
            'nombre_fan' => $obj->NombreFan,
            'nationalite' => $obj->Nationalite,
            'statut' => $obj->Statut,
            'format' => $obj->Format,
            'synopsis' => $obj->Synopsis,
            'miniatureURL' => $obj->miniatureURL,
            'posterURL' => $obj->posterURL
			));
								}
	}
}
}