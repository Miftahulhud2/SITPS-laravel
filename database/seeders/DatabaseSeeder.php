<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\tps;
use App\Models\suara;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // memanggil factory
        \App\Models\User::factory(10)->create();
        //isi manual database
        User::create([
            'tps_id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
            'remember_token' => '102938',
        ]);
        \App\Models\Pencoblos::factory(40)->create();
        \App\Models\Tps::factory(10)->create();



    }
}
