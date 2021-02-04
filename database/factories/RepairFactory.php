<?php

namespace Database\Factories;

use App\Models\Repair;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RepairFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repair::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => $this->faker->numberBetween(1,3),
            'item_id' => $this->faker->numberBetween(1,10),
            'status_id' => $this->faker->numberBetween(1,6),
            'description' => $this->faker->text(50),
            'repair_details' => $this->faker->text(100),
            'comments' => $this->faker->text(100),
            'price' => 50,
            'identifier' => $this->faker->numberBetween(100000000,999999999),
            'serial_number' => $this->faker->numberBetween(100000000,999999999)
        ];
    }
}
