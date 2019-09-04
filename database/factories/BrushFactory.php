<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brush;
use Faker\Generator as Faker;

$factory->define(Brush::class, function (Faker $faker) {
    return [
        //
        'started_at' => $start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days'),
        'ended_at' => $end = $faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +20 minutes')
    ];
});
