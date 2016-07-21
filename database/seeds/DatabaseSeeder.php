<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('SerieTableSeeder');
		$this->command->info('Serie table seeded!');//Ok

		$this->call('SaisonTableSeeder');
		$this->command->info('Saison table seeded!');//Ok

		$this->call('EpisodeTableSeeder');
		$this->command->info('Episode table seeded!');//Ok

		$this->call('TeaserTableSeeder');
		$this->command->info('Teaser table seeded!');//OK

		$this->call('PhotoTableSeeder');
		$this->command->info('Photo table seeded!');//Pas ok

		$this->call('ActeurTableSeeder');
		$this->command->info('Acteur table seeded!');

		$this->call('CreateurTableSeeder');
		$this->command->info('Createur table seeded!');

		$this->call('GenreTableSeeder');
		$this->command->info('Genre table seeded!');

		$this->call('ProductionTableSeeder');
		$this->command->info('Production table seeded!');

		$this->call('ActeurSaisonTableSeeder');
		$this->command->info('ActeurSaison table seeded!');

		$this->call('CreateurSerieTableSeeder');
		$this->command->info('CreateurSerie table seeded!');

		$this->call('GenreSerieTableSeeder');
		$this->command->info('GenreSerie table seeded!');

		$this->call('ProductionSerieTableSeeder');
		$this->command->info('ProductionSerie table seeded!');

	

		Model::reguard();
	}
}