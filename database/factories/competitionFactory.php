<?php

use Faker\Generator as Faker;
use App\Models\Competition;

$factory->define(Competition::class, function (Faker $faker) {
    return [
        'name' => $faker-> firstName(),
    ];
});
