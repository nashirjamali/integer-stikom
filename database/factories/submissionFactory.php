<?php

use Faker\Generator as Faker;
use App\Models\Submission;
use App\Models\Competition;

$factory->define(Submission::class, function (Faker $faker) {
    return [
        'id' => 'SM'.$faker-> unixTime(),
        'name' => $faker->firstname(),
        'date_start' => $faker->datetime(),
        'date_end' => $faker->datetime(),
        'competition_id'=> $faker->randomElement(Competition::pluck('id')->toArray()),
    ];
});
