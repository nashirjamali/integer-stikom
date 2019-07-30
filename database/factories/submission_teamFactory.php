<?php

use Faker\Generator as Faker;
use App\Models\submission;
use App\Models\team;
use App\Models\submission_team;


$factory->define(submission_team::class, function (Faker $faker) {
    return [
        'submission_id'=> $faker->randomElement(submission::pluck('id')->toArray()),
        'team_id'=> $faker->randomElement(team::pluck('id')->toArray()),
        'document' => $faker->fileExtension(),
    ];
});
