<?php

use Faker\Generator as Faker;
use App\Models\competition;

$factory->define(competition::class, function (Faker $faker) {
    return [
        'name' => $faker-> firstName(),
    ];
});
