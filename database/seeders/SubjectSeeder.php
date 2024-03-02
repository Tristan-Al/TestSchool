<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    use WithoutModelEvents;

    protected $order = 4;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            // Formación 1
            ['formation_id' => 1, 'denomination' => 'Introducción a la Programación', 'acronym' => 'INTRO', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 1, 'denomination' => 'Estructuras de Datos', 'acronym' => 'EDD', 'year' => 1, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 1, 'denomination' => 'Programación Orientada a Objetos', 'acronym' => 'POO', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 2
            ['formation_id' => 2, 'denomination' => 'Administración de Servidores', 'acronym' => 'ADM_SERV', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 2, 'denomination' => 'Desarrollo de Aplicaciones Web Avanzado', 'acronym' => 'DAWA', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 2, 'denomination' => 'Administración de Bases de Datos', 'acronym' => 'ADM_BD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 3
            ['formation_id' => 3, 'denomination' => 'Diseño de Interfaces de Usuario', 'acronym' => 'DIU', 'year' => 1, 'hours' => 90, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 3, 'denomination' => 'Desarrollo de Aplicaciones en Entorno de Cliente', 'acronym' => 'DAEC', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 3, 'denomination' => 'Desarrollo de Interfaces Web', 'acronym' => 'DIWEB', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 4
            ['formation_id' => 4, 'denomination' => 'Administración de Sistemas Operativos', 'acronym' => 'ASO', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 4, 'denomination' => 'Desarrollo de Aplicaciones en Entorno de Servidor', 'acronym' => 'DAES', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 4, 'denomination' => 'Administración de Bases de Datos', 'acronym' => 'ADM_BD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 5
            ['formation_id' => 5, 'denomination' => 'Programación Avanzada', 'acronym' => 'PROG_AV', 'year' => 1, 'hours' => 90, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 5, 'denomination' => 'Desarrollo de Aplicaciones Móviles', 'acronym' => 'DAM', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 5, 'denomination' => 'Diseño y Desarrollo de Videojuegos', 'acronym' => 'DDV', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 6
            ['formation_id' => 6, 'denomination' => 'Programación de Servicios y Procesos', 'acronym' => 'PSP', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 6, 'denomination' => 'Desarrollo de Interfaces Web', 'acronym' => 'DIWEB', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 6, 'denomination' => 'Desarrollo de Aplicaciones Distribuidas', 'acronym' => 'DAD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
        
            // Formación 7
            ['formation_id' => 7, 'denomination' => 'Gestión de Redes', 'acronym' => 'GEST_RED', 'year' => 1, 'hours' => 90, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 7, 'denomination' => 'Desarrollo de Aplicaciones Seguras', 'acronym' => 'DAS', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 7, 'denomination' => 'Administración de Sistemas Gestores de Bases de Datos', 'acronym' => 'ASGBD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],

            // Formación 8
            ['formation_id' => 8, 'denomination' => 'Administración de Sistemas Operativos', 'acronym' => 'ASO', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 8, 'denomination' => 'Desarrollo de Aplicaciones en Entorno de Servidor', 'acronym' => 'DAES', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 8, 'denomination' => 'Administración de Bases de Datos', 'acronym' => 'ADM_BD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],

            // Formación 9
            ['formation_id' => 9, 'denomination' => 'Programación Avanzada', 'acronym' => 'PROG_AV', 'year' => 1, 'hours' => 90, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 9, 'denomination' => 'Desarrollo de Aplicaciones Móviles', 'acronym' => 'DAM', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 9, 'denomination' => 'Diseño y Desarrollo de Videojuegos', 'acronym' => 'DDV', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],

            // Formación 10
            ['formation_id' => 10, 'denomination' => 'Programación de Servicios y Procesos', 'acronym' => 'PSP', 'year' => 1, 'hours' => 80, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 10, 'denomination' => 'Desarrollo de Interfaces Web', 'acronym' => 'DIWEB', 'year' => 2, 'hours' => 120, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()],
            ['formation_id' => 10, 'denomination' => 'Desarrollo de Aplicaciones Distribuidas', 'acronym' => 'DAD', 'year' => 2, 'hours' => 100, 'speciality' => 'FP', 'created_at' => now(), 'updated_at' => now()]
        ]);    
        
    }
}
