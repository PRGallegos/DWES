@extends('layouts.app')

@section('content')
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id_libro) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}">
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" value="{{ $libro->categoria }}">
        <label for="autor_id">Autor:</label>
        <select id="autor_id" name="autor_id">
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}" {{ $autor->id == $libro->autor_id ? 'selected' : '' }}>{{ $autor->nombre }}</option>
            @endforeach
        </select>
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $libro->descripcion }}">
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ $libro->precio }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection