<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->name = "Diego";
        $client->phone_number = "6121111111";
        $client->email="diego@gmail.com";
        $client->save();
        
        $client = new Client();

        $client->name = "Angel Iran";
        $client->phone_number = "6121111112";
        $client->email="iran@gmail.com";
        $client->save();
    }
}
