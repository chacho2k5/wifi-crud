<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'apellido',
        'nombres',
        'documento_tipo_id',
        'documento_numero',
        'cuil',
        'celular',
        'email',
    ];

    public function documento_tipos()
    {
        // return $this->hasMany(DocumentoTipo::class, 'foreign_key', 'local_key');
        return $this->hasOne(DocumentoTipo::class, '', '');
    }

    /**
     * Get all of the comments for the Docente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function niveles()
    {
        return $this->belongsToMany (Nivel::class, 'docente_nivel', 'docente_id','nivel_id');
    }

}
