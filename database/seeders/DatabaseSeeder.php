<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call(UserSeeder::class);
    $this->call(DepartmentSeeder::class);
    $this->call(MunicipalitySeeder::class);
    $this->call(CourseSeeder::class);
    $this->call(EventoSeeder::class);
}

}
