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
            'name'         => 'Shofa Wj',
            'email'        => 'shofapw@shz.id',
            'username'     => 'shofa',
            'password'     => Hash::make('shofa123'),
            'role'         => 'user',
        ]);

        $user = User::create([
            'id'           => '2',
            'name'         => 'admin',
            'email'        => 'admin@shz.id',
            'username'     => 'admin',
            'password'     => Hash::make('admin123'),
            'role'         => 'admin',
        ]);
    }
}
