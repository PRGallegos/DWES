@extends('layouts.app')

@section('content')
    <h1>Añadir Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST" class="form-container">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="nacionalidad" name="nacionalidad" required>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="F">F</option>
            <option value="M">M</option>
            <option value="Otro">Otro</option>
        </select>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        
        <button type="submit">Añadir</button>
    </form>
@endsection