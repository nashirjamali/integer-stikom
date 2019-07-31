<?php

use Illuminate\Database\Seeder;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id'   => 1,
            'name' => 'Sebastianus Sembara',
            'birth_date' => '1999-01-20',
            'email' => str_random(10) . '@stikom.edu',
            'phone' => '089616645409',
            'tshirt' => 'XL',
            'vegetarian' => 1,
            'identity_card' => 'ktm.jpg',
            'status' => 1,
            'team_id'=> 1,
        ]);
    }
}
