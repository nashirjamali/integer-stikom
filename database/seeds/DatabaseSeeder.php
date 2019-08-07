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
        $this->call(CompetitionsSeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(SubmissionsSeeder::class);
        $this->call(Submission_teamsSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ParticipantsSeeder::class);
        $this->call(UsersSeeder::class);
        
        
        

    }
}
