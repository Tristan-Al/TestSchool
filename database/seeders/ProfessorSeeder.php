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
            ['seneca_user' => 'jgarper176', 'name' => 'Juan', 'surname1' => 'García', 'surname2' => 'Pérez', 'speciality' => 'vocational_training', 'created_at' => now(), 'updated_at' => now()],
            ['seneca_user' => 'mlopgom209', 'name' => 'María', 'surname1' => 'López', 'surname2' => 'Gómez', 'speciality' => 'vocational_training', 'created_at' => now(), 'updated_at' => now()],
            ['seneca_user' => 'pmarrod102', 'name' => 'Pedro', 'surname1' => 'Martínez', 'surname2' => 'Rodríguez', 'speciality' => 'vocational_training', 'created_at' => now(), 'updated_at' => now()],
            ['seneca_user' => 'asanfer308', 'name' => 'Ana', 'surname1' => 'Sánchez', 'surname2' => 'Fernández', 'speciality' => 'vocational_training', 'created_at' => now(), 'updated_at' => now()],
            ['seneca_user' => 'pjimgar165', 'name' => 'Pablo', 'surname1' => 'Jiménez', 'surname2' => 'García', 'speciality' => 'vocational_training', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
