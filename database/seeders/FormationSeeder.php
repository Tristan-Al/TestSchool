<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    use WithoutModelEvents;

    protected $order = 2;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formations')->insert([
            ['denomination' => 'Bases de Datos', 'acronym' => 'BD', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Entornos de desarrollo', 'acronym' => 'ED', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Programación', 'acronym' => 'PROG', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Sistemas informáticos', 'acronym' => 'SI', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Formación y Orientación Laboral', 'acronym' => 'FOL', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Desarrollo web en entorno cliente', 'acronym' => 'DWEC', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Desarrollo web en entorno servidor', 'acronym' => 'DWES', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Despliegue de aplicaciones web', 'acronym' => 'DAW', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Horas de libre configuración', 'acronym' => 'HLC', 'created_at' => now(), 'updated_at' => now()],
            ['denomination' => 'Bases de Datos', 'acronym' => 'BD', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
