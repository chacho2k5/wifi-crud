<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $fillable = [
        'legajo',
        'apellido',
        'nombres',
        'documento_tipo_id',
        'documento_numero',
        'cuil',
        'telefono1',
        'telefono2',
        'correo',
        'ninicial',
        'nprimario',
        'nmedio',
        'nespecial',
        'nadmin',
        'fecha_nacimiento',
        'fecha_alta',
        'fecha_baja',
        'calle_nombre',
        'calle_numero',
        'codigo_postal',
        'barrio_id',
        'localidad_id',
        'provincia_id',
        'domicilio_emergencia',
        'obra_social_id',
        'servicio_emergencia',
        'telefono_servicio_emergencia',
        'status_personal_id',
        'categoria',
        'status',
        'apto',
        'apto_fecha',
        'seguro',
            ];

}
