<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pencoblos>
 */
class PencoblosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tps_id'        => $this->faker->numberBetween(1, 10),
            'hadir'         => $this->faker->boolean(false),
            'nama'          => $this->faker->name(),
            'nik'           => $this->faker->creditCardNumber(),
            'tmp_lahir'     => $this->faker->state(),
            'tgl_lahir'     => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31'),
            'umur'          => $this->faker->numberBetween(25,40),
            'sts_kawin'     => $this->faker->randomElement($array = array ('kawin', 'belum kawin')),
            'jns_kelamin'   => $this->faker->randomElement($array = array ('laki-laki','perempuan')),
            'alamat'        => $this->faker->address()
        ];
    }
}
