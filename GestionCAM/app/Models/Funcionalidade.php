<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'obs', 'usuario_creacion', 'usuario_modificacion'
    ];

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'fk_funcionalidad');
    }
}
