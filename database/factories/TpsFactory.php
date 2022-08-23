<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tps;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tps>
 */
class TpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static int $id = 0;

     public function definition()
    {


        if ( self::$id == 0 ) {
            self::$id = Tps::query()->max("id") ?? 0;
            // Initialize the id from database if exists.
            // If conditions is necessary otherwise it would return same max id.
        }

        self::$id++;

        return
        [
            'pencoblos_id' => self::$id,
            'suara_id' => self::$id,
            'namatps' => $nama = 'TPS ' . self::$id,
            'slug' => Str::slug($nama, '-'),
            'tmp_tps' => $this->faker->address,
            'kt_anggota' => $this->faker->firstNameMale,


            // "id_suara" => $this->faker->numberBetween(1, 10),
            // 'namatps' => 'TPS',
            // 'slug' => str::slug($namatps, '-'),
            // 'tmp_tps' => $this->faker->address,
            // 'kt_anggota' => $this->faker->name,

    	//     for($i = 1; $i <= 50; $i++) {

    	//       // insert data ke table pegawai menggunakan Faker
    	// 	    DB::table('pegawai')->insert([
        //         'id_suara' => $i,
    	// 		$namtps = 'namatps' => 'TPS '.$i,
    	// 		'slug' => str::slug($namatps, '-'),
    	// 		'tmp_tps' => $faker->address,
        //         'kt_anggota' => $faker->name,
    	// 	]);
        //     }
        ];


    }
}
