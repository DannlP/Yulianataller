<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            SoldadoSeeder::class,
            ServicioSeeder::class,
            CuerpoESeeder::class,
            CuartelSeeder::class,
            CompaniaSeeder::class,
        ]);
    }
}
