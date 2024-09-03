<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiene extends Model
{
    use HasFactory;

    protected $table = 'tiene';

    protected $fillable = [
        'fk_usuario',
        'fk_grado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'fk_usuario');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'fk_grado');
    }
}
