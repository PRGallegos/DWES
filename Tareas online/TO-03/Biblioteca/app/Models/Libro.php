<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';
    protected $primaryKey = 'id_libro';

    protected $fillable = [
        'titulo',
        'categoria',
        'autor_id',
        'descripcion',
        'precio',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }
}