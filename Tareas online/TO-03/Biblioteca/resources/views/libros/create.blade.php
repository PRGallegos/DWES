@extends('layouts.app')

@section('content')
    <h1>Añadir Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST" class="form-container">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required>
        <label for="autor_id">Autor:</label>
        <select id="autor_id" name="autor_id" required>
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>
        <button type="submit">Añadir</button>
    </form>
@endsection