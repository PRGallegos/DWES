@extends('layouts.app')

@section('content')
    <h1>Editar Alquiler</h1>
    <form action="{{ route('alquileres.update', $alquiler->alquiler_id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <label for="libro_id">Libro:</label>
        <select id="libro_id" name="libro_id">
            @foreach ($libros as $libro)
                <option value="{{ $libro->id_libro }}" {{ $libro->id_libro == $alquiler->libro_id ? 'selected' : '' }}>{{ $libro->titulo }}</option>
            @endforeach
        </select>
        <label for="usuario_id">Usuario:</label>
        <select id="usuario_id" name="usuario_id">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id_usuario }}" {{ $usuario->id_usuario == $alquiler->usuario_id ? 'selected' : '' }}>{{ $usuario->nombreusuario }}</option>
            @endforeach
        </select>
        <label for="fechprestamo">Fecha de Alquiler:</label>
        <input type="date" id="fechprestamo" name="fechprestamo" value="{{ $alquiler->fechprestamo }}">
        <label for="fechdevolucion">Fecha de Devolución:</label>
        <input type="date" id="fechdevolucion" name="fechdevolucion" value="{{ $alquiler->fechdevolucion }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection