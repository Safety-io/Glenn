<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rents')->insert([
            ['rent' => 1],
            ['rent' => 2],
            ['rent' => 3],
            ['rent' => 4],
            ['rent' => 5],
            ['rent' => 6],
            ['rent' => 7],
            ['rent' => 8],
            ['rent' => 9],
            ['rent' => 10],
            ['rent' => 11],
            ['rent' => 12],
        ]);
    }
}
