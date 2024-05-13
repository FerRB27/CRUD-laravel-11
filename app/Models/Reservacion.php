<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservacion extends Model
{
    use HasFactory;
    protected $primarykey = 'idreservacion';
    protected $table = "reservacion";
    protected $fillable = [
        'idhabitacion',
        'idcliente'
    ];

    // public function obtenerTodos()
    // {
    //     $list = DB::table('reservacion')
    //     ->join('habitacion', 'habitacion.idhabitacion', '=', 'reservacion.idhabitacion')
    //     ->select('reservacion.*', 'habitacion.codigo_habitacion AS codigoHabitacion')
    //     ->get();

    //     return $list;
    // }
    public function obtenerTodos()
    {
        $list = DB::table('reservacion')
        ->join('habitacion', 'habitacion.idhabitacion', '=', 'reservacion.idhabitacion')
        ->join('cliente', 'cliente.idcliente', '=', 'reservacion.idcliente')
        ->select('reservacion.*', 'habitacion.codigo_habitacion AS codigoHabitacion',
        'cliente.nombre_cliente AS nombreCliente')
        ->get();

        return $list;
    }

    // public function obtenerPorId($id)
    // {
    //     return Reservacion::find($id);
    // }

    public function crear(Reservacion $obj) 
    {
        return $obj->save();
    }
}
