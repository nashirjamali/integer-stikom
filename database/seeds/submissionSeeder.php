<?php

use Illuminate\Database\Seeder;
use App\Models\Submission;

class submissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Submission::class,15)->create();
    }
}
