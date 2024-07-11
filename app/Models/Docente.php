<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';
    protected $primaryKey = 'id_profesor';

    protected $fillable = [
        'nombre_profesor',
        'correo_profesor',
        'id_programa',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }
}
