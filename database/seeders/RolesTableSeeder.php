<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles= [
            ['name' => 'admin'],
            ['name' => 'worker'],
        ];
        foreach($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role['name'],
            ]);
        }
    }
}
