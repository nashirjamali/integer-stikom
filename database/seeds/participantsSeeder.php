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
        DB::table('participants')->insert([
            [
                'id'   => 1,
                'name' => 'Sebastianus Sembara',
                'birth_date' => 1999-01-20,
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'XL',
                'vegetarian' => 1,
                'identity_card' => 'ktm.jpg',
                'status' => 1,
                'team_id'=> 1,
            ],
            [
                'id'   => 2,
                'name' => 'Nashir Jamali',
                'birth_date' => 1998-06-13,
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'L',
                'vegetarian' => 1,
                'identity_card' => 'ktm2.jpg',
                'status' => 1,
                'team_id'=> 1,  
            ],
            [
                'id'   => 3,
                'name' => 'Ibnu Pratama',
                'birth_date' => 1999-10-22,
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645098',
                'tshirt' => 'L',
                'vegetarian' => 1,
                'identity_card' => 'ktm3.jpg',
                'status' => 1,
                'team_id'=> 1,
            ],
           
        ]);
    }
}
