<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    // Cuando no queremos trabajar con valores de tipo tiempo
    // public $timestamps = false;
=======
    // Cuando el nombre de la tabla de la en la migracion es distinto al de la base
    // protected $table = 'niveles';

    // Cuando no queremos trabajar con valores de tipo tiempo
    public $timestamps = false;
>>>>>>> 3683407b04d20f616864c4ba7679da2431160586

    // Que campos se van a llenar/utilizar de la tabla (o algo asi)
    protected $fillable = [
        'descripcion'
    ];
}
