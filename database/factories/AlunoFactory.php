<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aluno;
use Faker\Generator as Faker;

$factory->define(App\Models\Aluno::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'email' => $faker->email,
        'birth_data' => $faker->birth_data
    ];
});
