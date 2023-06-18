<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'responsable_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'responsable_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'responsable_id');
    }


}