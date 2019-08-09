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
<<<<<<< HEAD
            [
                'id'            => 'stikomdev',
                'name'          => 'Stikom Dev',
                'username'      => 'stikomdev',
                'password'      => bcrypt('1234567890'),
                'institution'   => 'Stikom Surabaya',
                'status'        => 1,
                'competition_id' => 1,
            ],
            [
                'id'            => 'anjingkancili',
                'name'          => 'Anjing Kancili',
                'username'      => 'anjingkancili',
                'password'      => bcrypt('1234567890'),
                'institution'   => 'Universitas Airlangga',
                'status'        => 1,
                'competition_id' => 1,
            ],
=======
            'id'            => 'stikomdev',
            'name'          => 'Stikom Dev',
            'username'      => 'stikomdev',
            'password'      => bcrypt('1234567890'),
            'institution'   => 'Stikom Surabaya',
            'status'        => 'Belum Terverifikasi',
            'competition_id'=> 1,
>>>>>>> ibnu
        ]);

        DB::table('teams')->insert([
            'id'            => 'ubayadev',
            'name'          => 'Ubaya Dev',
            'username'      => 'ubayadev',
            'password'      => bcrypt('1234567890'),
            'institution'   => 'Ubaya Surabaya',
            'status'        => 'Belum Terverifikasi',
            'competition_id'=> 2,
        ]);
    }
}
