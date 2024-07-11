<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloAspecto extends Model
{
    use HasFactory;

    protected $table = 'modelos_aspectos';
    protected $primaryKey = 'id_modelo_aspecto';

    protected $fillable = [
        'id_modelo',
        'id_aspecto',
    ];

    public function modeloEvaluacion()
    {
        return $this->belongsTo(ModeloEvaluacion::class, 'id_modelo');
    }

    public function aspecto()
    {
        return $this->belongsTo(Aspecto::class, 'id_aspecto');
    }
}
