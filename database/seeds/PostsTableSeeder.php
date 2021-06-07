<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'test title',
                'content' => 'test content',
                'image' => 'test.jpg',
                'umami' => 3,
                'enmi' => 5,
                'amami' => 7,
                'sanmi' => 10,
                'nigami' => 1,
            ],
            [
                'user_id' => 2,
                'title' => 'test title2',
                'content' => 'test content2',
                'image' => 'test2.jpg',
                'umami' => 3,
                'enmi' => 5,
                'amami' => 7,
                'sanmi' => 10,
                'nigami' => 1,
            ],
         ]);
    }
}
