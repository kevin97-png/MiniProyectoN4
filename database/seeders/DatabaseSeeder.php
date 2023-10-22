<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docente;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Asistencia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /* Docente */
        $docente =new DocenteSeeder();
        $docente->run();

        /* Alumno */
        $alumno =new AlumnoSeeder();
        $alumno->run();

        /* Curso */
        $curso =new CursoSeeder();
        $curso->run();

        /* Asistencia */
        $asistencia =new AsistenciaSeeder();
        $asistencia->run();
    }
}
