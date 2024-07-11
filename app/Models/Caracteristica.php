<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;

    protected $table = 'caracteristicas';
    protected $primaryKey = 'id_caracteristica';

    protected $fillable = [
        'nombre_caracteristica',
        'codigo_caracteristica',
        'id_factor',
    ];

    public function factor()
    {
        return $this->belongsTo(Factor::class, 'id_factor');
    }

    public function aspectos()
    {
        return $this->hasMany(Aspecto::class, 'id_caracteristica');
    }
}
