<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        $items = [
            ['name' => 'admin', 'email' => 'admin@example.com', 'password' => Hash::make('admin')],
            ['name' => 'user', 'email' => 'user@example.com', 'password' => Hash::make('user')],
        ];

        foreach ($items as $item) {
            DB::table('users')->insert([
                'name'=> $item['name'],
                'email' => $item['email'],
                'password' => $item['password']

            ]);
        }

        for($i=1;$i<=10;$i++)
        {

            DB::table('users')->insert([
                'name'=> $faker->firstName,
                'surname'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=> bcrypt('passw')

            ]);
        }

    }
}
