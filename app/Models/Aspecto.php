<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    use HasFactory;

    protected $table = 'aspectos';
    protected $primaryKey = 'id_aspecto';

    protected $fillable = [
        'nombre_aspecto',
        'codigo_aspecto',
        'id_caracteristica',
    ];

    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class, 'id_caracteristica');
    }

    public function evidencias()
    {
        return $this->hasMany(Evidencia::class, 'id_aspecto');
    }

    public function modeloAspectos()
    {
        return $this->hasMany(ModeloAspecto::class, 'id_aspecto');
    }
}
