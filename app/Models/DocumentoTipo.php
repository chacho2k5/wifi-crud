<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoTipo extends Model
{
    use HasFactory;
    // Se cambia el nombre a la tabla cdo difiere del nombre de la migracion
    // protected $table = 'documento_tipos';
    // Cuando no queremos trabajar con valores de tipo tiempo
    public $timestamps = false;

    // Que campos se van a llenar/utilizar de la tabla (o algo asi)
    protected $fillable = [
        'tipo',
        'descripcion'
    ];


}
