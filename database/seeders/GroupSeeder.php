<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithoutEvents;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    use WithoutEvents;

    protected $order = 3;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            ['schoolYear' => '2023-24', 'formation_id' => 1, 'year' => 1, 'denomination' => '2DAWB', 'shift' => 'Evening', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 2, 'year' => 2, 'denomination' => '2DAWA', 'shift' => 'Morning', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 3, 'year' => 2, 'denomination' => '2DAMA', 'shift' => 'Morning', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 4, 'year' => 1, 'denomination' => '2DAMB', 'shift' => 'Evening', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 5, 'year' => 1, 'denomination' => '1DAWA', 'shift' => 'Morning', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 6, 'year' => 1, 'denomination' => '1DAWB', 'shift' => 'Evening', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 7, 'year' => 1, 'denomination' => '1ASIRA', 'shift' => 'Morning', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 8, 'year' => 1, 'denomination' => '1ASIRB', 'shift' => 'Evening', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 9, 'year' => 2, 'denomination' => '2ASIRA', 'shift' => 'Morning', 'created_at' => now(), 'updated_at' => now()],
            ['schoolYear' => '2023-24', 'formation_id' => 10, 'year' => 2, 'denomination' => '2ASIRB', 'shift' => 'Evening', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
