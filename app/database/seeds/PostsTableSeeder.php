<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $authors = Author::lists('id');

		foreach(range(1, 100) as $index)
		{
			Post::create([
                'title' => $faker->sentence(3),
                'body' => $faker->text(),
                'author_id' => $faker->randomElement($authors),
                'active' => $faker->boolean()
			]);
		}
	}

}