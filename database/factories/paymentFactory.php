<?php

use Faker\Generator as Faker;
use App\Models\team;
use App\Models\payment;

$factory->define(payment::class, function (Faker $faker) {
    return [
        'evidence' => $faker->firstname(),
        'description' => $faker->realText(),
        'team_id'=> $faker->randomElement(team::pluck('id')->toArray()),
    ];
});
