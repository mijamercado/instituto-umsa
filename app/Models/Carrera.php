<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Facultad;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $fillable = [
        'nombre',
        'facultad_id',
        'direccion',
        'telefono',
        'email',
        'web',
        'logo',
        'enlace_facebook',
        'enlace_maps',
        'estado',
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }
}