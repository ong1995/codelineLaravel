<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		[
    		'name' => 'Paul',
    		'email' =>'paul@gmail.com',
    		'password' => bcrypt('secret'),
    		],
    		[
    		'name' => 'Justin',
    		'email' => 'justin@gmail.com',
    		'password' => bcrypt('secret'),
    		],
    		[
    		'name' => 'Ong',
    		'email' => 'ong@gmail.com',
    		'password' => bcrypt('secret'),
    		]
    		]);
    }
}
