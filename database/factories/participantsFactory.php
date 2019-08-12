<?php

use Faker\Generator as Faker;
use App\Models\Team;
use App\Models\Participants;

$factory->define(Participants::class, function (Faker $faker) {
    
    return [
        'name' => $faker->firstname(),
        'birth_date' => $faker->dateTimeThisCentury->format('Y-m-d') ,
        'email' => $faker->email(),
        'phone' => $faker->e164PhoneNumber (),
        'tshirt' => $faker-> randomElement(['XS','S','M','L','XL','XXL']),
        'vegetarian' => $faker-> randomElement(['Yes','No']),
        'identity_card' => $faker-> image(),
        'status' => $faker-> randomElement(['Yes','No']),
        'team_id'=> $faker->randomElement(Team::pluck('id')->toArray()),
    ];
});
