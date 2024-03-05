<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    use WithoutModelEvents;

    protected $order = 5;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lectures')->insert([
            ['group_id' => 1, 'subject_id' => 2, 'professor_id' => 3, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 2, 'subject_id' => 2, 'professor_id' => 4, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 3, 'subject_id' => 3, 'professor_id' => 5, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 4, 'subject_id' => 3, 'professor_id' => 1, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 5, 'subject_id' => 4, 'professor_id' => 2, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 6, 'subject_id' => 4, 'professor_id' => 3, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 7, 'subject_id' => 5, 'professor_id' => 4, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 8, 'subject_id' => 5, 'professor_id' => 5, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 9, 'subject_id' => 6, 'professor_id' => 1, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 10, 'subject_id' => 6, 'professor_id' => 2, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 1, 'subject_id' => 7, 'professor_id' => 3, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 2, 'subject_id' => 7, 'professor_id' => 4, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 3, 'subject_id' => 8, 'professor_id' => 5, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 4, 'subject_id' => 8, 'professor_id' => 1, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 5, 'subject_id' => 9, 'professor_id' => 2, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 6, 'subject_id' => 9, 'professor_id' => 3, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 7, 'subject_id' => 10, 'professor_id' => 4, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 8, 'subject_id' => 10, 'professor_id' => 5, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 9, 'subject_id' => 11, 'professor_id' => 1, 'hours' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['group_id' => 10, 'subject_id' => 11, 'professor_id' => 2, 'hours' => 3, 'created_at' => now(), 'updated_at' => now()],
            
        ]);
    }
}
