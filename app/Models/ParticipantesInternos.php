<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantesInternos extends Model
{
    use HasFactory;

    protected $table = 'participantes_internos';

    public $timestamps = false;

    protected $fillable = [
        'escu_codigo',
        'inic_codigo',
        'pain_docentes',
        'pain_estudiantes'
    ];
}
