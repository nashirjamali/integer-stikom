<?php

use Illuminate\Database\Seeder;
use App\Models\Team;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Team::class,15)->create();
    }
}
