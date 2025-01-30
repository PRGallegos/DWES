<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;

    protected $table = 'alquileres';
    protected $primaryKey = 'alquiler_id';

    protected $fillable = [
        'libro_id',
        'usuario_id',
        'fechprestamo',
        'fechdevolucion',
    ];

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id', 'id_libro');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id_usuario');
    }
}