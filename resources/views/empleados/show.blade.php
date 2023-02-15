@extends('layouts.app')

@section('content')

<h2>Ver datos</h2>

<p><strong>Nombre:</strong> {{ $empleados->nombre }}</p>

<p><strong>Apellido:</strong> {{ $empleados->apellido }}</p>

<p><strong>Email:</strong> {{ $empleados->email }}</p>

<p><strong>Telefono:</strong> {{ $empleados->telefono }}</p>

<p><strong>Direccion:</strong> {{ $empleados->direccion }}</p>
<form action="{{route ('empleados.destroy', $empleados->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" >Borrar</button>
</form>
<a href="/empleados">Volver al Listado</a>
@endsection