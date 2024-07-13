<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'obs', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'fk_dojo');
    }
}
