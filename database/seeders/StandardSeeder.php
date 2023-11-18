<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('standards')->insert([
            ['standard' => 'Studio'],
            ['standard' => '1+1'],
            ['standard' => '2+1'],
            ['standard' => '3+1'],
            ['standard' => '3+2'],
            ['standard' => '4+1'],
            ['standard' => '4+2'],
            ['standard' => 'Villa'],
            ['standard' => 'Room'],
        ]);
    }
}
