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

$factory->define(gerenciaProjeto\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(gerenciaProjeto\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
       	'responsible' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker ->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
      
    ];
});
