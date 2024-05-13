<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $primarykey = 'idhabitacion';
    protected $table = "habitacion";
    protected $fillable = [
        'codigo_habitacion'
    ];

    public function obtenerHabitaciones()
    {
        return Habitacion::all();
    }

}
