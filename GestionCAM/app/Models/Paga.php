<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paga extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_usuario', 'fk_cuota', 'usuarioCreacion', 'usuarioModificacion'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function cuota()
    {
        return $this->belongsTo(Cuota::class, 'fk_cuota');
    }
}
