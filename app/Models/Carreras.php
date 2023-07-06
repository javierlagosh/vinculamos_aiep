<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;

    protected $table = 'carreras';

    public $timestamps = false;

    protected $fillable = [
        'care_codigo',
        'care_nombre',
        'care_descripcion',
        'care_director',
        'care_visible',
        'escu_codigo',
        'care_creado',
        'care_actualizado',
        'care_rut_mod',
        'care_rol_mod'
    ];
}
