<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            ['price' => 85],
            ['price' => 100],
            ['price' => 150],
            ['price' => 200],
            ['price' => 250],
            ['price' => 300],
            ['price' => 350],
            ['price' => 400],
            ['price' => 450],
            ['price' => 500],
            ['price' => 550],
            ['price' => 600],
            ['price' => 650],
            ['price' => 700],
            ['price' => 750],
            ['price' => 800],
            ['price' => 850],
            ['price' => 900],
            ['price' => 950],
            ['price' => 1000]
        ]);
    }
}
