<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombreusuario',
        'password',
        'telefono',
        'fechentrega',
    ];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'usuario_id', 'id_usuario');
    }
}