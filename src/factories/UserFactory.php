<?php


use Xoco70\LaravelTournaments\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {

    $email = $faker->email;
    return [
        'name' => $faker->name,
        'email' => $email,
        'password' => bcrypt(str_random(10)),
    ];
});