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
                'birth_date' => '1999-01-20',
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'XL',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm.jpg',
                'status' => 'Ketua',
                'team_id'=> 'stikomdev',
            ],
            [
                'id'   => 2,
                'name' => 'Nashir Jamali',
                'birth_date' => '1998-06-13',
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm2.jpg',
                'status' => 'Anggota',
                'team_id'=> 'stikomdev',  
            ],
            [
                'id'   => 3,
                'name' => 'Ibnu Pratama',
                'birth_date' => '1999-10-22',
                'email' => str_random(10) . '@stikom.edu',
                'phone' => '089616645098',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm3.jpg',
                'status' => 'Anggota',
                'team_id'=> 'stikomdev',
            ],[
                'id'   => 4,
                'name' => 'Sembara',
                'birth_date' => '1999-01-20',
                'email' => str_random(10) . '@ubaya.edu',
                'phone' => '089616645409',
                'tshirt' => 'XL',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm.jpg',
                'status' => 'Ketua',
                'team_id'=> 'ubayadev',
            ],
            [
                'id'   => 5,
                'name' => 'Jamali',
                'birth_date' => '1998-06-13',
                'email' => str_random(10) . '@ubaya.edu',
                'phone' => '089616645409',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm2.jpg',
                'status' => 'Anggota',
                'team_id'=> 'ubayadev',  
            ],
            [
                'id'   => 6,
                'name' => 'shofa',
                'birth_date' => '1999-10-22',
                'email' => str_random(10) . '@ubaya.edu',
                'phone' => '089616645098',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ktm3.jpg',
                'status' => 'Anggota',
                'team_id'=> 'ubayadev',
            ],
           
        ]);
    }
}
