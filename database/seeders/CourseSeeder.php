<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'nombre' => 'Curso 1',
                'fecha_inicio' => '2023-06-01',
                'fecha_fin' => '2023-06-30',
                'descripcion' => 'Descripción del curso 1',
                'cantidad_beneficiados' => 20,
                'departamento_id' => 1, // ID del departamento
                'municipio_id' => 1, // ID del municipio
                'responsable_id' => 1, // ID del responsable
                'estado_id' => 1, // ID del estado
            ],
            [
                'nombre' => 'Curso 2',
                'fecha_inicio' => '2023-07-01',
                'fecha_fin' => '2023-07-31',
                'descripcion' => 'Descripción del curso 2',
                'cantidad_beneficiados' => 15,
                'departamento_id' => 2, // ID del departamento
                'municipio_id' => 2, // ID del municipio
                'responsable_id' => 2, // ID del responsable
                'estado_id' => 2, // ID del estado
            ],
            // Agrega más cursos si es necesario
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
