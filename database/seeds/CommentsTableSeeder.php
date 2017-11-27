<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('comments')->insert(
    		[
    		'user_id' => 1,
    		'film_id' => 1,
    		'comment' => 'Very nice!',
    		],

    		[
    		'user_id' => 2,
    		'film_id' => 2,
    		'comment' => 'Awsome!',
    		],

    		[
    		'user_id' => 1,
    		'film_id' => 3,
    		'comment' => 'Cool!',
    		],

    		[
    		'user_id' => 3,
    		'film_id' => 4,
    		'comment' => 'The best!',
    		],
    		);
    }
}
