<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematicas extends Model
{
    use HasFactory;

    protected $table = 'tematicas';

    public $timestamps = false;

    protected $fillable = [
        'tema_codigo',
        'tema_nombre',
        'tema_visible',
        'tema_creado',
        'tema_actualizado',
        'tema_nickname_mod',
        'tema_rol_mod'
    ];
}
