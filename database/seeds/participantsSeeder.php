<?php

use Illuminate\Database\Seeder;
use App\Models\Participants;

class participantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Participants::class,15)->create();
    }
}
