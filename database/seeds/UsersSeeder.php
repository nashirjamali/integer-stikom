<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            [
                'id'           => '1',
                'team_id'      => '',
                'name'         => 'Nashir Jamali',
                'username'     => 'nashirjamali',
                'password'     => bcrypt('nashir1999'),
                'role'         => 'admin'
            ],
            [
                'id'           => '2',
                'team_id'      => '',
                'name'         => 'Sebastianus Sembara',
                'username'     => 'babaskece',
                'password'     => bcrypt('bastian2k19'),
                'role'         => 'admin'
            ],
            [
                'id'           => '3',
                'team_id'      => '',
                'name'         => 'Ayub Rizki Wardhana',
                'username'     => 'ayubrw',
                'password'     => bcrypt('ayub2k19'),
                'role'         => 'admin'
            ],
            [
                'id'           => '4',
                'team_id'      => '',
                'name'         => 'Shofa Wardatul Jannah',
                'username'     => 'shofawj',
                'password'     => bcrypt('shofa2k19'),
                'role'         => 'admin'
            ],
            [
                'id'           => '5',
                'team_id'      => '',
                'name'         => 'Ibnu Pratama',
                'username'     => 'ibnuprtma',
                'password'     => bcrypt('ibnu1945'),
                'role'         => 'admin'
            ]
        ]);
    }
}
