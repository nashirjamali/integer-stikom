<?php

use Illuminate\Database\Seeder;
use App\Models\team;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(team::class,15)->create();
    }
}
