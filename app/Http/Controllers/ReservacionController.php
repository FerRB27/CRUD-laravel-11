<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Habitacion;
use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{

    private $model;

    function __construct(Reservacion $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = $this->model->obtenerTodos();
        return view('reservaciones.index', ['reservaciones' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $habitacion = new Habitacion();
        $cliente = new Cliente();

        $hlist = $habitacion->obtenerHabitaciones();
        $clist = $cliente->obtenerClientes();

        return view('reservaciones.crear', [
            'habitacionesList' => $hlist,
            'clientesList' => $clist
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $reservacion = new Reservacion([
            'idhabitacion' => $request->idhabitacion,
            'idcliente' => $request->idcliente
        ]);

        $this->model->crear($reservacion);

        return redirect()->action([ReservacionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservacion $reservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservacion $reservacion)
    {
        //
    }
}
