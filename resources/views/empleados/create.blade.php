@extends('layouts.app')

@section('content')

<h1>CREAR EMPLEADOS</h1>

    <form action="{{route ('empleados.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="Apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="emaill">Email de contacto</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="telefono">Telefono de contacto</label>
        <input type="tel" name="telefono" id="telefono">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <button type="submit">Crear Empleado</button>
    </form>
@endsection