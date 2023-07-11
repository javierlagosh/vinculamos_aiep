<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model
{
    use HasFactory;

    protected $table = 'escuelas';

    public $timestamps = false;

    protected $fillable = [
        'escu_codigo',
        'escu_nombre',
        'escu_descripcion',
        'escu_director',
        'escu_visible',
        'escu_institucion',
        'escu_creado',
        'escu_actualizado',
        'escu_rut_mod',
        'escu_rol_mod'
    ];
}