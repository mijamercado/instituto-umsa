<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instituto extends Model
{
    use HasFactory;
    protected $table = 'institutos';
    protected $fillable = [
        'nombre',
        'facultad_id',
        'carrera_id',
        'direccion',
        'email',
        'web',
        'telefono',
        'enlace_facebook',
        'enlace_maps',
        'estado',
    ];
    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}