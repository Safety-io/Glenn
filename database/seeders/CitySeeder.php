<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Gazmagusa'],
            ['name' => 'Girne'],
            ['name' => 'Guzelyurt'],
            ['name' => 'Iskele'],
            ['name' => 'Lefke'],
            ['name' => 'Lefkosa'],
            ['name' => 'yeni iskele'],
        ]);
    }
}
