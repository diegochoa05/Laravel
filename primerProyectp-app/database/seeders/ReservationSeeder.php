<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();

        $reservation->name = "Diego";
        $reservation->phone_number = "6121111111";
        $reservation->email="diego@gmail.com";
        $reservation->category="Premium";
        $reservation->method_payment = "cash";
        $reservation->save();
    }
}
