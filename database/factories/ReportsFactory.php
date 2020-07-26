<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reports;
use Faker\Generator as Faker;

$factory->define(Reports::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->text,
        'details' => $faker->paragraph
    ];
});
