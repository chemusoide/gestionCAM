<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'obs', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'fk_rol');
    }

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'fk_rol');
    }
}
