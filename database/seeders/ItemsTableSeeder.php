<?php

namespace Database\Seeders;
use App\Models\Item;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->count(20)->create()->each(function (Item $item): void {
            $item->save();
        });
    }
}
