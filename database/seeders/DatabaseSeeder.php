<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(RepairsTableSeeder::class);

        // User::factory(10)->create();
    }
}
