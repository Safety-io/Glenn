<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commissions')->insert([
            ['commission' => 1],
            ['commission' => 2],
            ['commission' => 3],
            ['commission' => 4],
        ]);
    }
}
