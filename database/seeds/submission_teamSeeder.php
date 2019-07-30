<?php

use Illuminate\Database\Seeder;
use App\Models\Submission_team;

class submission_teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Submission_team::class,15)->create();
    }
}
