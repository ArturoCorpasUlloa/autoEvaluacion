<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;

    protected $table = 'factores';
    protected $primaryKey = 'id_factor';

    protected $fillable = [
        'nombre_factor',
        'codigo_factor',
    ];

    public function caracteristicas()
    {
        return $this->hasMany(Caracteristica::class, 'id_factor');
    }
}
