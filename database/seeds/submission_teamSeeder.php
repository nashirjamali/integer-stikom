<?php

use Illuminate\Database\Seeder;
use App\Models\submission_team;

class submission_teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(submission_team::class,15)->create();
    }
}
