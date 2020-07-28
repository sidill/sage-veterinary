<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'reference' => $faker->word,
        'name' => $faker->name,
        'address' => $faker->text,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
    ];
});
