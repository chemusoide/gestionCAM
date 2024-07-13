<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'obs', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'fk_funcionalidad');
    }
}
