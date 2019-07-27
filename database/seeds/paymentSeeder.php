<?php

use Illuminate\Database\Seeder;
use App\Models\payment;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(payment::class,15)->create();
    }
}
