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
       'password' => 'secret',
       'description' => $faker->text(),
       'address' => $faker->address
    ];
});

$factory->define(App\Models\Offer::class, function(Faker\Generator $faker) {
    $totalStores = App\Models\Store::all()->count();
    $totalCities = App\Models\City::all()->count();
    $name = $faker->sentence;
    return [
        'city_id' => rand(1, $totalCities),
        'store_id' => rand(1, $totalStores),
        'name' => $name,
        'slug' => $name,
        'description' => $faker->text(),
        'conditions' => $faker->text(),
        'image' => $faker->imageUrl(640, 480, 'food'),
        'price' => $faker->randomFloat(2, 100, 10000),
        'dscto' => $faker->randomFloat(2, 1, 100),
        'publication_date' =>  $faker->dateTime(),
        'expiration_date' =>  $faker->dateTime(),
        'purchases' => $faker->randomDigit,
        'umbral' => $faker->randomDigit,
        'revised' => $faker->randomElement([true, false])
    ];
});
