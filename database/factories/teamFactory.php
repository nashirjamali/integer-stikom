<?php

use Faker\Generator as Faker;
use App\Models\Team;
use App\Models\Competition;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'id' => 'TM'.$faker-> unixTime(),
        'name' => $faker->firstname(),
        'username' => $faker->username(),
        'password' => $faker->password(),
        'institution' => $faker->company(),
        'status' => $faker-> randomElement(['Yes','No']),
        'competition_id'=> $faker->randomElement(Competition::pluck('id')->toArray()),
    ];
});
