<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorSeeder extends Seeder
{
    use WithoutModelEvents;

    protected $order = 1;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professors')->insert([
            ['senecaUser' => 'jgarper176', 'name' => 'Juan', 'surname1' => 'García', 'surname2' => 'Pérez', 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['senecaUser' => 'mlopgom209', 'name' => 'María', 'surname1' => 'López', 'surname2' => 'Gómez', 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['senecaUser' => 'pmarrod102', 'name' => 'Pedro', 'surname1' => 'Martínez', 'surname2' => 'Rodríguez', 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['senecaUser' => 'asanfer308', 'name' => 'Ana', 'surname1' => 'Sánchez', 'surname2' => 'Fernández', 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['senecaUser' => 'pjimgar165', 'name' => 'Pablo', 'surname1' => 'Jiménez', 'surname2' => 'García', 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
