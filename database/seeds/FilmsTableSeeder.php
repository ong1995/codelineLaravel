<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('films')->insert(
    		[
    		'name' => 'After the Storm',
    		'slug' => 'after-the-storm',
    		'description' => 'Japanese auteur Hirokazu Kore-eda’s latest is part family drama tries to reconnect with his family.',
    		'release_date' => 2017-07-01,
    		'rating' => 5,
    		'ticket_price' => 100,
    		'country' => 'Japan',
    		'genre' => 'Drama',
    		'photo' => 'afterstorm.jpg',
    		],

    		[
    		'name' => 'Wonder Woman',
    		'slug' => 'wonder-woman',
    		'description' => 'American superhero film based on the DC Comics character of the same name, distributed by Warner Bros. Pictures. It is the fourth installment in the DC Extended Universe.',
    		'release_date' => 2017-05-15,
    		'rating' => 4,
    		'ticket_price' => 150,
    		'country' => 'United States',
    		'genre' => 'Action',
    		'photo' => 'wonderwoman.jpg',
    		],

    		[
    		'name' => 'Blade Runner 2049',
    		'slug' => 'blade-runner-2049',
    		'description' => 'Officer K (Ryan Gosling), a new blade runner for the Los Angeles Police Department, unearths a long-buried secret that has the potential to plunge what\'s left of society into chaos.',
    		'release_date' => 2017-10-03,
    		'rating' => 5,
    		'ticket_price' => 150,
    		'country' => 'United States',
    		'genre' => 'Action',
    		'photo' => 'bladerunner.jpg',
    		],

    		[
    		'name' => 'Dunkirk',
    		'slug' => 'dunkirk',
    		'description' => 'In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk.',
    		'release_date' => 2017-07-13,
    		'rating' => 4,
    		'ticket_price' => 140,
    		'country' => 'United Kingdom',
    		'genre' => 'Thriller',
    		'photo' => 'dunkirk.jpg',
    		],
    		);
    }
}
