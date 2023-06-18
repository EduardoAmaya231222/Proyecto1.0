<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'nombre' => 'Simulacro de terremoto',
            'fecha_inicio' => '2023-06-18',
            'fecha_fin' => '2023-06-18',
            'descripcion' => 'Ayudar a las personas a tener un conocimiento sobre cómo prevenir catástrofes como terremotos',
            'cantidad_beneficiados' => 100,
            'departamento_id' => 1, // Reemplaza con el ID correspondiente
            'municipio_id' => 1, // Reemplaza con el ID correspondiente
            'responsable_id' => 1, // Reemplaza con el ID correspondiente
            'estado_id' => 1, // Reemplaza con el ID correspondiente
        ]);

        Event::create([
            'nombre' => 'Primeros Auxilios',
            'fecha_inicio' => '2023-06-20',
            'fecha_fin' => '2023-06-20',
            'descripcion' => 'Ante una emergencia es esencial saber primeros auxilios y algunos pasos básicos que ayudarán a salvaguardar la integridad y la vida del sujeto',
            'cantidad_beneficiados' => 50,
            'departamento_id' => 2, // Reemplaza con el ID correspondiente
            'municipio_id' => 2, // Reemplaza con el ID correspondiente
            'responsable_id' => 2, // Reemplaza con el ID correspondiente
            'estado_id' => 1, // Reemplaza con el ID correspondiente
        ]);
    }
}