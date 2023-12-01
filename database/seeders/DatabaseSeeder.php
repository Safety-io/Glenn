<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\House;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this::call([
            CitySeeder::class,
            CommissionSeeder::class,
            DepositSeeder::class,
            RentSeeder::class,
            StandardSeeder::class,
            PriceSeeder::class,
        ]);
        House::factory()->count(10)->create();
    }
}
