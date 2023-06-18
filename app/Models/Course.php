<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function departamento()
    {
        return $this->belongsTo(Department::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function responsables()
    {
        return $this->hasMany(User::class, 'responsable_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
