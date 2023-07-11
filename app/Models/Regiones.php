<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';

    public $timestamps = false;

    protected $fillable = [
        'regi_codigo',
        'regi_nombre',
        'pais_codigo',
        'regi_creado',
        'regi_actualizado',
        'regi_rut_mod',
        'regi_rol_mod'
    ];
}
