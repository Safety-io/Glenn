<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Commission;
use App\Models\Deposit;
use App\Models\House;
use App\Models\Price;
use App\Models\Rent;
use App\Models\Standard;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        user::factory()->count(10)->create();

        Standard::factory()->count(10)->create();
        Rent::factory()->count(10)->create();
        Commission::factory()->count(10)->create();
        Deposit::factory()->count(10)->create();
        Price::factory()->count(10)->create();
        City::factory()->count(10)->create();


        House::factory()->count(10)->create();
    }

}
