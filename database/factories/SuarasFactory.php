<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\suara>
 */
class SuarasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'suara_1'       => $this->faker->numberBetween(1, 500),
            'suara_2'       => $this->faker->numberBetween(1, 500),
            'suara_tdk_sah' => $this->faker->numberBetween(1, 500),
        ];
    }
}
