<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sedes extends Model
{
    use HasFactory;

    protected $table = 'sedes';

    public $timestamps = false;

    protected $fillable = [
        'sede_codigo',
        'sede_nombre',
        'sede_director',
        'sede_institucion',
        'sede_descripcion',
        'sede_visible',
        'sede_creado',
        'sede_actualizado',
        'sede_rut_mod',
        'sede_rol_mod'
    ];
}
