<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => "Przyjęto"],
            ['name' => "W realizacji"],
            ['name' => "Zrobione"],
            ['name' => "Zrobione/skontaktowano"],
            ['name' => "Wydano"],
            ];

            foreach ($items as $item) {
                DB::table('status')->insert([
                    'name' => $item['name'],
                ]);
            }

    }
}
