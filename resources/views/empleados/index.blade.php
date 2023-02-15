@extends('layouts.app')

@section('content')
<h2>Ver datos</h2>
<table class="table">
    <thead>
        <tr>
            
            
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($empleado as $empleados)
        <tr>
            <td>{{ $empleados->nombre }}</td>
            <td>{{ $empleados->apellido }}</td>
            <td>{{ $empleados->email }}</td>
            <td>{{ $empleados->telefono }}</td>
            <td>{{ $empleados->direccion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection