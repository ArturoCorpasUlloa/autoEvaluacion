<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloEvaluacion extends Model
{
    use HasFactory;

    protected $table = 'modelos_evaluacion';
    protected $primaryKey = 'id_modelo';

    protected $fillable = [
        'id_programa',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }

    public function modeloAspectos()
    {
        return $this->hasMany(ModeloAspecto::class, 'id_modelo');
    }
}
