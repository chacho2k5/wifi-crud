<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    // Cuando el nombre de la tabla de la en la migracion es distinto al de la base
    // protected $table = 'niveles';

    // Cuando no queremos trabajar con valores de tipo tiempo
    public $timestamps = false;

    // Que campos se van a llenar/utilizar de la tabla (o algo asi)
    protected $fillable = [
        'descripcion'
    ];
}
