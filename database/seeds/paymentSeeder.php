<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment::class,15)->create();
    }
}
