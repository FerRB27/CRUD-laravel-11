@extends('template.inicio')

@section('title', 'Clientes')

@section('content')
<div class="py-12">
  <div class="table-responsive">
    <table class="table table-borderless table-striped table-hover mx-auto align-middle">
      <thead>
        <tr>
          <th scope="col">Nombre del Cliente</th>
        </tr>
      </thead>
      <tbody>
        @if (count($clientes))     
        @foreach ($clientes as $cliente)
          <tr>
            <td>{{$cliente->nombre_cliente}}</td>
          </tr>
        @endforeach 
        @endif
      </tbody>
    </table>
  </div>
</div>

@endsection