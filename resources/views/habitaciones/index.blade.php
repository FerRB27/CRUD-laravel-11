@extends('template.inicio')

@section('title', 'Habitaciones')

@section('content')
<div class="py-12">
  <div class="table-responsive">
    <table class="table table-borderless table-striped table-hover mx-auto align-middle">
      <thead>
        <tr>
          <th scope="col">Habitaciones</th>
        </tr>
      </thead>
      <tbody>
        @if (count($habitaciones))     
        @foreach ($habitaciones as $habitacion)
          <tr>
            <td>{{$habitacion->codigo_habitacion}}</td>
          </tr>
        @endforeach 
        @endif
      </tbody>
    </table>
  </div>
</div>

@endsection