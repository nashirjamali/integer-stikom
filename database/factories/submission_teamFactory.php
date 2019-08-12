<?php

use Faker\Generator as Faker;
use App\Models\Submission;
use App\Models\Team;
use App\Models\Submission_team;


$factory->define(Submission_team::class, function (Faker $faker) {
    return [
        'submission_id'=> $faker->randomElement(Submission::pluck('id')->toArray()),
        'team_id'=> $faker->randomElement(Team::pluck('id')->toArray()),
        'document' => $faker->fileExtension(),
    ];
});
