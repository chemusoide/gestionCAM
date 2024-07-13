<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellido1',
        'apellido2',
        'email',
        'telefono',
        'fechanacimiento',
        'dni',
        'fk_rol',
        'obs',
        'password',
        'usuarioCreacion',
        'usuarioModificacion'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the role associated with the user.
     */
    public function rol()
    {
        return $this->belongsTo(Role::class, 'fk_rol');
    }

    public function pagas()
    {
        return $this->hasMany(Paga::class, 'fk_usuario');
    }

    public function grados()
    {
        return $this->belongsToMany(Grado::class, 'tiene', 'usuario_id', 'grado_id');
    }
}
