<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primarykey = 'idcliente';
    protected $table = "cliente";
    protected $fillable = [
        'nombre_cliente'
    ];
    
    public function obtenerClientes()
    {
        return Cliente::all();
    }
}
