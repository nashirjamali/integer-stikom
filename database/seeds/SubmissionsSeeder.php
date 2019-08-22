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
            'name' => 'Pengumpulan Proposal',
            'date_start' => '2019-07-31',
            'date_end' => '2019-08-30',
            'competition_id' => 2,
        ]);
        DB::table('submissions')->insert([
            'id' => 'uiux2',
            'name' => 'Pengumpulan Link Video',
            'date_start' => '2019-09-10',
            'date_end' => '2019-09-24',
            'competition_id' => 2,
        ]);
        DB::table('submissions')->insert([
            'id' => 'sdc1',
            'name' => 'Pengumpulan Proposal',
            'date_start' => '2019-07-31',
            'date_end' => '2019-08-30',
            'competition_id' => 1,
        ]);
        DB::table('submissions')->insert([
            'id' => 'sdc2',
            'name' => 'Pengumpulan Link Video',
            'date_start' => '2019-09-10',
            'date_end' => '2019-09-24',
            'competition_id' => 1,
        ]);
    }
}
