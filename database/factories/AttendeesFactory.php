<?php

/** @var Factory $factory */

use App\Attendees;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Attendees::class, function (Faker $faker) {
    return [
        'name'     =>   $faker->unique()->name,
        'type'     =>   $faker->boolean,
        'code'     =>   $faker->randomNumber(6),
        'confirm'  =>   $faker->boolean
    ];
});
