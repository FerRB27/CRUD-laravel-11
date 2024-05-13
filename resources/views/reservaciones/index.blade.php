@extends('template.inicio')

@section('title', 'Incio')

@section('content')
<a href="{{route('reservaciones.crear')}}"> Nuevo</a>
<div class="py-12">
    <div class="table-responsive">
      <table class="table table-borderless table-striped table-hover mx-auto align-middle">
        <thead>
          <tr>
            <th scope="col">Habitaciones</th>
            <th scope="col">Clientes</th>
          </tr>
        </thead>
        <tbody>
          @if (count($reservaciones))     
          @foreach ($reservaciones as $reservacion)
            <tr>
              <td>{{$reservacion->codigoHabitacion}}</td>
              <td>{{$reservacion->nombreCliente}}</td>
            </tr>
          @endforeach 
          @endif
        </tbody>
      </table>
    </div>
  </div>
  

@endsection