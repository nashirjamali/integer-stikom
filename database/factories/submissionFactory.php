<?php

use Faker\Generator as Faker;
use App\Models\submission;
use App\Models\competition;

$factory->define(submission::class, function (Faker $faker) {
    return [
        'id' => 'SM'.$faker-> unixTime(),
        'name' => $faker->firstname(),
        'date_start' => $faker->datetime(),
        'date_end' => $faker->datetime(),
        'competition_id'=> $faker->randomElement(competition::pluck('id')->toArray()),
    ];
});
