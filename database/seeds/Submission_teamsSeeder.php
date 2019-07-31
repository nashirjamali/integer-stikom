<?php

use Illuminate\Database\Seeder;

class Submission_teamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submission_teams')->insert([
            'submission_id'=> 'uiux1',
            'team_id'=> 'stikomdev',
            'document' => 'berkas.pdf',
        ]);
    }
}
