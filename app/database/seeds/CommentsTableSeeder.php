<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_AR');
        $posts = Post::lists('id');

        foreach(range(1, 50) as $index)
		{
			Comment::create([
                'name' => $faker->name(),
                'comment' => $faker->paragraph(),
                'post_id' => $faker->randomElement($posts)
			]);
		}
	}

}