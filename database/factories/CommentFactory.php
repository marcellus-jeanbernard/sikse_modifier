<?php

use Faker\Generator as Faker;

use App\Comment;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'texte' => $faker->sentence(),
        'post_id' => $faker->post_id,
        'user_id' => $faker->user_id,
        
        'pseudo' => $faker->pseudo,
        
        'mail' => $faker->user_id,

        'email' => $faker->email

        
    ];
});
