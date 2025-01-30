@extends('layouts.app')

@section('content')
    <h1>Añadir Alquiler</h1>
    <form action="{{ route('alquileres.store') }}" method="POST" class="form-container">
        @csrf
        <label for="libro_id">Libro:</label>
        <select id="libro_id" name="libro_id" required>
            @foreach ($libros as $libro)
                <option value="{{ $libro->id_libro }}">{{ $libro->titulo }}</option>
            @endforeach
        </select>
        <label for="usuario_id">Usuario:</label>
        <select id="usuario_id" name="usuario_id" required>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id_usuario }}">{{ $usuario->nombreusuario }}</option>
            @endforeach
        </select>
        <label for="fechprestamo">Fecha de Alquiler:</label>
        <input type="date" id="fechprestamo" name="fechprestamo" required>
        <label for="fechdevolucion">Fecha de Devolución:</label>
        <input type="date" id="fechdevolucion" name="fechdevolucion" required>
        <button type="submit">Añadir</button>
    </form>
@endsection