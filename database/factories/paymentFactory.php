<?php

use Faker\Generator as Faker;
use App\Models\Team;
use App\Models\Payment;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'evidence' => $faker->firstname(),
        'description' => $faker->realText(),
        'team_id'=> $faker->randomElement(Team::pluck('id')->toArray()),
    ];
});
