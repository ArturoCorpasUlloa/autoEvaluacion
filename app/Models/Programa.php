<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programas';

    protected $primaryKey = 'id_programa';

    protected $fillable = [
        'nombre_programa',
        'codigo_programa',
        'nivel_formacion',
    ];

    public function docentes()
    {
        return $this->hasMany(Docente::class, 'id_programa');
    }

    public function modelosEvaluacion()
    {
        return $this->hasMany(ModeloEvaluacion::class, 'id_programa');
    }
}
