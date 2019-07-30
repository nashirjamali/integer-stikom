<?php

use Illuminate\Database\Seeder;
use App\Models\participants;

class participantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(participants::class,15)->create();
    }
}
