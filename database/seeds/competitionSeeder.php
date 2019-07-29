<?php

use Illuminate\Database\Seeder;
use App\Models\competition;

class competitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(competition::class,15)->create();
    }
}
