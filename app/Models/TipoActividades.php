<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActividades extends Model
{
    use HasFactory;

    protected $table = 'tipo_actividades';

    public $timestamps = false;

    protected $fillable = [
        'tiac_codigo',
        'tiac_nombre',
        'tiac_visible',
        'tiac_creado',
        'tiac_actualizado',
        'tiac_nickname_mod',
        'tick_rol_mod'
    ];
}
