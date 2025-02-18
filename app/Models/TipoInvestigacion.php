<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoInvestigacion extends Model
{
    use HasFactory;
    protected $table = 'tipo_investigacion';
    protected $fillable = [
        'tipo',
        'descripcion',
    ];
}