<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('news')->insert([
			'title' => str_random(10),
			'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque consequuntur, cupiditate deserunt dolor dolore ducimus eos est eveniet ipsam, iure minima, nesciunt non obcaecati sit tenetur totam vero voluptas.",
			'user_id' => rand(1,12),
			'image' => 'http://lorempixel.com/900/600/sports/'.rand(1,10)
		]);
    }
}
