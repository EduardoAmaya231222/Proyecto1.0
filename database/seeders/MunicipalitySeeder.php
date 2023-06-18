<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $municipalities = [
            [
                'name' => 'Mejicanos',
                'department_id' => 1, // ID del departamento al que pertenece el municipio
            ],
            [
                'name' => 'Santa Tecla',
                'department_id' => 1, // ID del departamento al que pertenece el municipio
            ],

        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
