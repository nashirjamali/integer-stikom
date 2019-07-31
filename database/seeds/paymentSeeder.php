<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payments')->insert([
            'id' => 1,
            'evidence' => 'bukti.jpg',
            'description' => "Aku transfer pake atm MAMA",
            'team_id'=> 'stikomdev',
        ]);
    }
}
