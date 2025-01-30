
@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <label for="nombreusuario">Nombre:</label>
        <input type="text" id="nombreusuario" name="nombreusuario" value="{{ $usuario->nombreusuario }}">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $usuario->telefono }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection