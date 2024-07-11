<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrigenInstitucional extends Model
{
    use HasFactory;

    protected $table = 'origenes_institucionales';
    protected $primaryKey = 'id_origen';

    protected $fillable = [
        'nombre_origen',
        'responsable',
        'correo_responsable',
    ];

    public function evidencias()
    {
        return $this->hasMany(Evidencia::class, 'id_origen');
    }
}

