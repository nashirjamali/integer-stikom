<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'email' => Str::random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'XL',
                'vegetarian' => 'Y',
                'identity_card' => 'stikomdev_1.jpg',
                'status' => 'Ketua',
                'team_id'=> 'stikomdev',
            ],
            [
                'id'   => 2,
                'name' => 'Irvan Alfaridzi',
                'birth_date' => '1998-06-13',
                'email' => Str::random(10) . '@stikom.edu',
                'phone' => '089616645409',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'stikomdev_2.jpg',
                'status' => 'Anggota',
                'team_id'=> 'stikomdev',  
            ],
            [
                'id'   => 3,
                'name' => 'Ibnu Pratama',
                'birth_date' => '1999-10-22',
                'email' => Str::random(10) . '@stikom.edu',
                'phone' => '089616645098',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'stikomdev_3.jpg',
                'status' => 'Anggota',
                'team_id'=> 'stikomdev',
            ],[
                'id'   => 4,
                'name' => 'Sembara',
                'birth_date' => '1999-01-20',
                'email' => Str::random(10) . '@ubaya.edu',
                'phone' => '089616645409',
                'tshirt' => 'XL',
                'vegetarian' => 'Y',
                'identity_card' => 'ubayadev_1.jpg',
                'status' => 'Ketua',
                'team_id'=> 'ubayadev',
            ],
            [
                'id'   => 5,
                'name' => 'Jamali',
                'birth_date' => '1998-06-13',
                'email' => Str::random(10) . '@ubaya.edu',
                'phone' => '089616645409',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ubayadev_2.jpg',
                'status' => 'Anggota',
                'team_id'=> 'ubayadev',  
            ],
            [
                'id'   => 6,
                'name' => 'shofa',
                'birth_date' => '1999-10-22',
                'email' => Str::random(10) . '@ubaya.edu',
                'phone' => '089616645098',
                'tshirt' => 'L',
                'vegetarian' => 'Y',
                'identity_card' => 'ubayadev_3.jpg',
                'status' => 'Anggota',
                'team_id'=> 'ubayadev',
            ],
           
        ]);
    }
}
