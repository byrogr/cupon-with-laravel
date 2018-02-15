<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\City::class, function(Faker\Generator $faker) {
    $city = $faker->city;
    return [
        'name' => $city,
        'slug' => $city
    ];
});

$factory->define(App\Models\Store::class, function(Faker\Generator $faker) {
   $totalCities = App\Models\City::all()->count();
   $name = $faker->company;
   return [
       'city_id' => rand(1, $totalCities),
       'name' => $name,
       'slug' => $name,
       'login' => $faker->userName,
       'password' => $faker->password,
       'description' => $faker->text(),
       'address' => $faker->address
   ];
});
