<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Supplier;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'postcode' => $faker->numberBetween($min = 10000, $max = 99999),
        'place' => $faker->city,
        'street' => $faker->streetName,
        'house_number' => $faker->buildingNumber
    ];
});
