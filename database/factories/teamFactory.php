<?php

use Faker\Generator as Faker;
use App\Models\team;
use App\Models\competition;

$factory->define(team::class, function (Faker $faker) {
    return [
        'id' => 'TM'.$faker-> unixTime(),
        'name' => $faker->firstname(),
        'username' => $faker->username(),
        'password' => $faker->password(),
        'institution' => $faker->company(),
        'status' => $faker-> randomElement(['Yes','No']),
        'competition_id'=> $faker->randomElement(competition::pluck('id')->toArray()),
    ];
});
