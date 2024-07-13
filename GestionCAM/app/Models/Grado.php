<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'fechaObtencion', 'obs', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_grado', 'grado_id', 'usuario_id');
    }
}
