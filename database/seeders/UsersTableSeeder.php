<?php

namespace Database\Seeders;




use Illuminate\Database\Seeder;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [
            ['name' => 'admin', 'email' => 'admins@example.com', 'password' => bcrypt('admin')],
            ['name' => 'user', 'email' => 'user@example.com', 'password' => bcrypt('user')],
        ];

        foreach ($items as $item) {
            DB::table('users')->insert([
                'name'=> $item['name'],
                'email' => $item['email'],
                'password' => $item['password']

            ]);
        }




    }
}
