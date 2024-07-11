<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    use HasFactory;

    protected $table = 'evidencias';
    protected $primaryKey = 'id_evidencia';

    protected $fillable = [
        'id_aspecto',
        'id_usuario',
        'tipo_evidencia',
        'fecha_carga',
        'nombre_archivo',
        'ruta_archivo',
        'id_origen',
    ];

    public function aspecto()
    {
        return $this->belongsTo(Aspecto::class, 'id_aspecto');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function origenInstitucional()
    {
        return $this->belongsTo(OrigenInstitucional::class, 'id_origen');
    }
}

