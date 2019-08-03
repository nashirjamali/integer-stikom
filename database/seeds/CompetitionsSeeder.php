<?php

use Illuminate\Database\Seeder;

class CompetitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions')->insert([
            [
            'id'            => 1,
            'name'          => 'Software Development',
            ],
            [
            'id'            => 2,
            'name'          => 'UI/UX Design',
            ],
        ]);
    }
}
