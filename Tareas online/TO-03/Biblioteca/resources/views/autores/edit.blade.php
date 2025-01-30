@extends('layouts.app')

@section('content')
    <h1>Editar Autor</h1>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $autor->nombre }}">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ $autor->apellidos }}">
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="nacionalidad" name="nacionalidad" value="{{ $autor->nacionalidad }}">
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="M" {{ $autor->sexo == 'M' ? 'selected' : '' }}>M</option>
            <option value="F" {{ $autor->sexo == 'F' ? 'selected' : '' }}>F</option>
            <option value="Otro" {{ $autor->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
        </select>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="{{ $autor->edad }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection