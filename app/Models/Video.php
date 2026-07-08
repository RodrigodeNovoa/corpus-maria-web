<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // Constantes para las regiones
    public const REGIONES = [
        'Sin especificar',
        'Andina',
        'Caribe',
        'Pacífica',
        'Orinoquía',
        'Amazónica',
        'Insular'
    ];

    protected $fillable = [
        'titulo',
        'descripcion',
        'url_video',
        'genero',
        'tema',
        'signante',
        'rango_edad',
        'sexo',
        'mano',
        'duracion',
        'anho',
        'regiones_geograficas',
    ];

    /**
     * Normaliza un string: elimina acentos y convierte a minusculas
     */
    private static function normalizar(string $texto): string
    {
        // Mapeo de acentos a letras sin acento
        $acentos = [
            'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
            'Á' => 'a', 'É' => 'e', 'Í' => 'i', 'Ó' => 'o', 'Ú' => 'u'
        ];
        
        $texto = strtr($texto, $acentos);
        return strtolower(trim($texto));
    }

    /**
     * Setter para regiones_geograficas con validacion
     */
    public function setRegionesGeograficasAttribute($value)
    {
        // Si es nulo, asignar 'Sin especificar'
        if (is_null($value) || $value === '') {
            $this->attributes['regiones_geograficas'] = 'Sin especificar';
            return;
        }

        // Normalizar el valor de entrada
        $normalizado = self::normalizar($value);
        
        // Buscar coincidencia en los valores permitidos
        $encontrado = null;
        foreach (self::REGIONES as $region) {
            if (self::normalizar($region) === $normalizado) {
                $encontrado = $region; // Guardamos el valor original (con acentos correctos)
                break;
            }
        }
        
        // Si no coincide, asignar 'Sin especificar'
        $this->attributes['regiones_geograficas'] = $encontrado ?? 'Sin especificar';
    }

    /**
     * Getter para obtener el valor formateado
     */
    public function getRegionesGeograficasAttribute($value)
    {
        return $value ?? 'Sin especificar';
    }
}
