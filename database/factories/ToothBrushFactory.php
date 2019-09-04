<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ToothBrush;
use Faker\Generator as Faker;

$factory->define(ToothBrush::class, function (Faker $faker) {
    return [
        //
        'serial_number' => $faker->unique()->md5

    ];
});
