<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_AR');

		foreach(range(1, 10) as $index)
		{
            $name = $faker->name;
			Author::create([
                'name' => $name,
                'twitter' => '@'.Str::slug($name),
			]);
		}
	}

}