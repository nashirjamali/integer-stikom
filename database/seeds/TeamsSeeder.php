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
            'id'            => 'stikomdev',
            'name'          => 'Stikom Dev',
            'username'      => 'stikomdev',
            'password'      => bcrypt('1234567890'),
            'institution'   => 'Stikom Surabaya',
            'status'        => 'belum',
            'competition_id'=> 1,
        ]);

        DB::table('teams')->insert([
            'id'            => 'ubayadev',
            'name'          => 'Ubaya Dev',
            'username'      => 'ubayadev',
            'password'      => bcrypt('1234567890'),
            'institution'   => 'Ubaya Surabaya',
            'status'        => 'belum',
            'competition_id'=> 2,
        ]);
    }
}
