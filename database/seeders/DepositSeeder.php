<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deposits')->insert([
            ['deposit' => 1],
            ['deposit' => 2],
            ['deposit' => 3],
        ]);
    }
}
