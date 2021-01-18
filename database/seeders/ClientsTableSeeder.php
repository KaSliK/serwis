<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(10)->create()->each(function (Client $client): void {
            $client->save();
        });
      /*  factory(Client::class, 10)->create()->each(function (Client $client): void {
            $client->save();
        });*/

    }
}
