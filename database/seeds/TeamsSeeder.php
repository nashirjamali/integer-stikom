<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->insert([
            'id'            => Str::random(10),
            'name'          => 'StikomDev',
            'username'      => Str::random(5),
            'password'      => bcrypt('password'),
            'institution'   => 'Stikom Surabaya',
            'status'        => 1,
            'competition_id'=> 1,
        ]);
    }
}
