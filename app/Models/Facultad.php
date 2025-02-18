<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Facultad extends Model
{
    use HasFactory;
    protected $table = 'facultades';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'web',
        'logo',
        'enlace_facebook',
        'enlace_maps',
        'estado',
    ];
}