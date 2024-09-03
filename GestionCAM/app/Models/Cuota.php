<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'cantidad', 'obs', 'usuario_creacion', 'usuario_modificacion', 'fk_dojo'
    ];

    public function pagas()
    {
        return $this->hasMany(Paga::class, 'fk_cuota');
    }
    
    public function dojo()
    {
        return $this->belongsTo(Dojo::class, 'fk_dojo');
    }
}
