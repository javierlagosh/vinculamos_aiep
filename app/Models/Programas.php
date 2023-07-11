<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    use HasFactory;

    protected $table = 'programas';

    public $timestamps = false;

    protected $fillable = [
        'prog_codigo',
        'tmec_codigo',
        'prog_nombre',
        'prog_descripcion',
        'prog_director',
        'prog_visible',
        'prog_creado',
        'prog_actualizado',
        'prog_nickname_mod',
        'prog_rol_mod'
    ];
}
