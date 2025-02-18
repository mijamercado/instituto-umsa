<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investigacion extends Model
{
    use HasFactory;
    protected $table = 'investigacion';
    protected $fillable = ['nombre', 'descripcion', 'instituto_id', 'tipo_investigacion_id'];

    public function instituto()
    {
        return $this->belongsTo(Instituto::class);
    }
    public function tipoInvestigacion()
    {
        return $this->belongsTo(TipoInvestigacion::class);
    }
}