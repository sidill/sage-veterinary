<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'reference' => $faker->word,
        'name' => $faker->name,
        'species' => $faker->word,
        'type' => $faker->word,
        'breed' => $faker->word,
        'color' => $faker->word,
        'markings' => $faker->word,
        'microchip' => $faker->word,
        'tattoo' => $faker->word,
        'date_of_birth' => $faker->word,
        'medical_history' => '{}',
    ];
});
