<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Author::truncate();
        Post::truncate();
        Comment::truncate();

        Eloquent::unguard();

        $this->call('AuthorsTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
	}

}
