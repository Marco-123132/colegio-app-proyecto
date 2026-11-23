<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estudiante extends Model
{
    use HasFactory;

    // Si tu tabla en phpMyAdmin se llama 'estudiante' (en singular), cambia 'estudiantes' por 'estudiante'
    protected $table = 'estudiantes';

    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'apoderado',
        'telefono',
    ];

    // Accesor para obtener el nombre completo fácilmente
    public function getNombreCompletoAttribute(): string
    {
        return trim("{$this->nombres} {$this->apellidos}");
    }
}