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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Playground\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Playground\Seller::class, function (Faker\Generator $faker) {
    $user_ids = \Playground\User::all('id')->toArray();

    return [
        'user_id' => $faker->randomElement($user_ids)['id']
    ];
});

$factory->define(Playground\Shop::class, function (Faker\Generator $faker) {
    $seller_ids = \Playground\Seller::all('id')->toArray();
    return [
        'name' => $faker->word,
        'slug' => $faker->unique()->word,
        'description' => $faker->paragraph(2),
        'profile_image' => $faker->imageUrl(150, 150, 'people'),
        'cover_image' => $faker->imageUrl(1200, 300),
        'location' => $faker->address,
        'seller_id' => $faker->randomElement($seller_ids)['id']
    ];
});

$factory->define(Playground\Gig::class, function (Faker\Generator $faker) {
    $shop_ids = \Playground\Shop::all('id')->toArray();
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(2),
        'price' => $faker->numberBetween(500, 10000),
        'duration' => $faker->numberBetween(30, 60),
        'at_customer_location' => $faker->boolean(),
        'shop_id' => $faker->randomElement($shop_ids)['id']
    ];
});

$factory->define(Playground\Gig\Image::class, function (Faker\Generator $faker) {
    $gigs_ids = \Playground\Gig::all('id')->toArray();
    return [
        'src' => $faker->imageUrl(150, 150, 'nightlife'),
        'priority' => $faker->numberBetween(1, 10),
        'title' => $faker->sentence(3),
        'gig_id' => $faker->randomElement($gigs_ids)['id'],
    ];
});

$factory->define(Playground\Gig\Location::class, function (Faker\Generator $faker) {
    return [
        'city' => $faker->city,
        'country' => $faker->country,
        'street' => $faker->streetAddress,
        'zip' => $faker->postcode,
    ];
});
