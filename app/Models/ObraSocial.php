<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObraSocial extends Model
{
    use HasFactory;

    public $table = 'obras_sociales';
    public $timestamps = false;
    protected $fillable = [
       'descripcion',
        'siglas'
    ];
}
