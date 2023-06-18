<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
        'cantidad_beneficiados',
        'departamento_id',
        'municipio_id',
        'responsable_id',
        'estado_id',
    ];

    // Relaciones con otros modelos

    public function departamento()
    {
        return $this->belongsTo(Department::class, 'departamento_id');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipality::class, 'municipio_id');
    }

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
