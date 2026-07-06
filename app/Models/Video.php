<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'url_video',
        'genero',
        'tema',
        'signante',
        'rango_edad',
        'sexo',
        'duracion',
        'anho',
    ];
}
