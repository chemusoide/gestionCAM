<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_rol', 'fk_funcionalidad', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'fk_rol');
    }

    public function funcionalidad()
    {
        return $this->belongsTo(Funcionalidad::class, 'fk_funcionalidad');
    }
}
