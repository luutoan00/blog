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
    	$faker= Faker\Factory::create();

    	for($i=0; $i<50;$i++){
    		App\Post::create([
    			'title'=> $faker->text($maxNbChars = 200),
    			'thumbnail'=>$faker->imageUrl($width=200, $height=200),
		// 'img'=>$faker->imageUrl($width=200, $height=200, 'people'),
    			'category_id'=>1,
    			'description'=>$faker->text($maxNbChars = 100),
    			'slug'=>str_slug($faker->text($maxNbChars = 200)),
    			'content'=>$faker->text($maxNbChars = 6000),
    			'user_id'=>1,
    			
    		]);
    	}
    }
}
