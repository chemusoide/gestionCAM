<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'fechaObtencion', 'obs', 'usuario_creacion', 'usuario_modificacion'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_grado', 'fk_grado', 'fk_usuario');
    }
}
