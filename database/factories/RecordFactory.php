<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Record;
use Faker\Generator as Faker;

$factory->define(Record::class, function (Faker $faker) {
    return [
        'client_reference' => $faker->word,
        'client_name' => $faker->word,
        'client_address' => $faker->text,
        'client_phone' => $faker->word,
        'client_email' => $faker->word,
        'patient_reference' => $faker->word,
        'patient_name' => $faker->word,
        'patient_species' => $faker->word,
        'patient_type' => $faker->word,
        'patient_breed' => $faker->word,
        'patient_color' => $faker->word,
        'patient_markings' => $faker->word,
        'patient_microchip' => $faker->word,
        'patient_tattoo' => $faker->word,
        'patient_date_of_birth' => $faker->word,
        'medical_history' => '{}',
        'physical_examination' => '{}',
        'subjective_findings' => '{}',
        'objective_findings' => '{}',
        'assesment' => $faker->text,
        'treatment' => $faker->text,
        'recommendations' => $faker->text,
        'immunization_history' => '{}',
    ];
});
