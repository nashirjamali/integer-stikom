<?php

use Illuminate\Database\Seeder;
use App\Models\submission;

class submissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(submission::class,15)->create();
    }
}
