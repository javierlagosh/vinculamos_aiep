<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iniciativas extends Model
{
    use HasFactory;

    protected $table = 'iniciativas';

    public $timestamps = false;

    protected $fillable = [
        'inic_codigo',
        'conv_codigo',
        'tiac_codigo',
        'inic_nombre',
        'inic_territorio',
        'inic_anho',
        'inic_creado',
        'inic_actualizado',
        'inic_nickname_mod',
        'inic_rol_mod'
    ];
}
