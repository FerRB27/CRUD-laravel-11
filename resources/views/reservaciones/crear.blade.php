@extends('template.inicio')

@section('title', 'Habitaciones-Crear')

@section('content')

<a href="/reservaciones"> Lista</a>

<form action="{{route('reservaciones.crear')}}" method="post">
    @csrf

    <label for="idhabitacion">Habitaciones</label>
    <select id="idhabitacion" name="idhabitacion">
        @foreach ($habitacionesList as $habitaciones)
            <option value="{{ $habitaciones->idhabitacion }}"> {{ $habitaciones->codigo_habitacion }}</option>
        @endforeach
    </select>
    <br/>
    <label for="idcliente">Cliente</label>
    <select id="idcliente" name="idcliente">
        @foreach ($clientesList as $cliente)
            <option value="{{ $cliente->idcliente }}"> {{ $cliente->nombre_cliente }}</option>
        @endforeach
    </select>
    <br/>
    <input type="submit" value="Guardar">
</form>
@endsection