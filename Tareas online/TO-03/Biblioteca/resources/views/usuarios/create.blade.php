@extends('layouts.app')

@section('content')
    <h1>Añadir Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST" class="form-container">
        @csrf
        <label for="nombreusuario">Nombre:</label>
        <input type="text" id="nombreusuario" name="nombreusuario" required>
        <label for="telefono">Teléfono:</label>
        <input type="number" id="telefono" name="telefono" required>
        <button type="submit">Añadir</button>
    </form>
@endsection