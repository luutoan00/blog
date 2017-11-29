<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'title'=> $faker->text($maxNbChars = 200),
		'thumbnail'=>$faker->imageUrl($width=200, $height=200),
		// 'img'=>$faker->imageUrl($width=200, $height=200, 'people'),
		'category_id'=>1,
		'description'=>$faker->text($maxNbChars = 100),
		'slug'=>str_slug($faker->text($maxNbChars = 200)),
		'content'=>$faker->text($maxNbChars = 6000),
		'user_id'=>1,
	];
});
