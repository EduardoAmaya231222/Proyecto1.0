<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'San Salvador',
                'description' => '¿Qué caracteriza a San Salvador?
                San Salvador – CIDEU
                La ciudad se caracteriza por el comercio y servicios como 
                principal actividad económica, así mismo, por ser núcleo de asuntos políticos, culturales y 
                financieros. ',
            ],
            [
                'name' => 'La Libertad',
                'description' => 'Su Cabecera es la ciudad de Santa Tecla, Cabecera también del municipio homónimo. 
                Tiene una extensión territorial de 1653 km² y una población de 843 500 habitantes.',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
