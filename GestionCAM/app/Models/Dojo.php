<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'img', 'obs', 'usuario_creacion', 'usuario_modificacion'
    ];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'fk_dojo');
    }

    public function dojoChos()
    {
        return $this->belongsToMany(User::class, 'dirige', 'fk_dojo', 'fk_usuario')
                    ->withPivot('fecha_inicio', 'fecha_fin')
                    ->withTimestamps();
    }

    public function shihans()
    {
        return $this->belongsToMany(User::class, 'gestiona', 'fk_dojo', 'fk_usuario')
                    ->withPivot('fecha_inicio', 'fecha_fin')
                    ->withTimestamps();
    }
}
