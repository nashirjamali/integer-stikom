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
            'id'           => '1',
            'team_id'      => 'stikomdev',
            'name'         => 'Stikom Dev',
            'username'     => 'stikomdev',
            'password'     => Hash::make('1234567890'),
            'role'         => 'team',
        ]);

        $user = User::create([
            'id'           => '2',
            'team_id'      => '',
            'name'         => 'admin',
            'username'     => 'admin',
            'password'     => Hash::make('1234567890'),
            'role'         => 'admin',
        ]);

        $user = User::create([
            'id'           => '3',
            'team_id'      => '',
            'name'         => 'ibnu',
            'username'     => 'ibnuprtma',
            'password'     => Hash::make('1234567890'),
            'role'         => 'commite',
        ]);

        $user = User::create([
            'id'           => '4',
            'team_id'      => 'anjingkancili',
            'name'         => 'Anjing Kancili',
            'username'     => 'anjingkancili',
            'password'     => Hash::make('1234567890'),
            'role'         => 'team',
        ]);
    }
}
