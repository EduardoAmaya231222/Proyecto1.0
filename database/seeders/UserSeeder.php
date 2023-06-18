<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Mario Amaya',
            'email' => 'mario.amaya22@itca.edu.sv',
            'password' => bcrypt('itca123!')
        ]);

        User::create([
            'name' => 'Carlos Baires',
            'email' => 'carlos.baires22@itca.edu.sv',
            'password' => bcrypt('itca123!')
        ]);

        User::create([
            'name' => 'Alejandra Perez',
            'email' => 'alejandra.perez22@itca.edu.sv',
            'password' => bcrypt('itca123!')
        ]);

        User::create([
            'name' => 'Erikson Polanco',
            'email' => 'erikson.polanco22@itca.edu.sv',
            'password' => bcrypt('itca123!')
        ]);
    }
}
