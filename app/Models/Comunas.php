<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comunas';

    public $timestamps = false;

    protected $fillable = [
        'comu_codigo',
        'comu_nombre',
        'regi_codigo',
        'comu_creado',
        'comu_actualizado',
        'comu_rut_mod',
        'comu_rol_mod'
    ];
}
