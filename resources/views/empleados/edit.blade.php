@extends('layouts.app')

@section('content')
    <div>
        <h1>Editar</h1>

        <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $empleados->nombre }}" required>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="{{ $empleados->apellido }}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $empleados->email }}" required>
            </div>

            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="{{ $empleados->telefono }}" required>
            </div>

            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ $empleados->direccion }}" required>
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
