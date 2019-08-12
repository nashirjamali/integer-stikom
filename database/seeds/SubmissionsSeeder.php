<?php

use Illuminate\Database\Seeder;

class SubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submissions')->insert([
            'id' => 'uiux1',
            'name' => 'StikomDev',
            'date_start' => '2019-07-31',
            'date_end' => '2019-08-30',
            'competition_id' => 1,
        ]);
    }
}
