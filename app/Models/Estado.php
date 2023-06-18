<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados'; // Nombre de la tabla en la base de datos

    protected $fillable = ['nombre']; // Atributos asignables en masa

    // Relación uno a muchos con la tabla de cursos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
