<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_usuario', 'fk_dojo', 'fechaAlta', 'fechaBaja', 'dojoCho', 'obs', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function dojo()
    {
        return $this->belongsTo(Dojo::class, 'fk_dojo');
    }
}
