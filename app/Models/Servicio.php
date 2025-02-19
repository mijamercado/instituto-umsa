<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = ['nombre', 'descripcion', 'instituto_id', 'laboratorio_id'];

    public function instituto()
    {
        return $this->belongsTo(Instituto::class);
    }

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class);
    }
}
