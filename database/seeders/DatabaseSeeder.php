<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FormationSeeder::class,
            GroupSeeder::class,
            ProfessorSeeder::class,
            SubjectSeeder::class,
            LectureSeeder::class
        ]);
    }
}
