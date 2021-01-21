<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'client_id' => $this->faker->numberBetween(1,10),
            'brand' => $this->faker->company,
            'model' => $this->faker->companySuffix,
//            'description' => $this->faker->text,
//            'price' => 50,
        ];
    }
}
