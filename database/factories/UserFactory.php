<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Factory as Factory;

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

$localisedFaker = Factory::create("ru_RU");

$factory->define(User::class, function (Faker $faker) use ($localisedFaker) {
    $fullname = $localisedFaker->name;
    $name = explode(' ',trim($fullname));

    return [
        'login' => $faker->unique()->firstName($gender = null),
        'name' => $name[0],// . ' ' . $name[1],
//        'lastname' => $name[2],
        'email' => $faker->unique()->safeEmail,
        'avatar' => 'default-image.jpg',
        'email_verified_at' => now(),
        'password' =>  bcrypt('password'), // password
        'remember_token' => Str::random(10),
    ];
});
