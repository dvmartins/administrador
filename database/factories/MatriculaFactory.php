<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Matricula;
use Faker\Generator as Faker;

$factory->define(App\Models\Matricula::class, function (Faker $faker) {
    return [
        'cpf' => $faker->cpf,
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->phone
        
    ];
});
