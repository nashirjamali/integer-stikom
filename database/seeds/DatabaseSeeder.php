<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(competitionSeeder::class);
        $this->call(teamSeeder::class);
        $this->call(participantsSeeder::class);
        $this->call(paymentSeeder::class);
        $this->call(submissionSedder::class);
        $this->call(submission_teamSeeder::class);

    }
}
