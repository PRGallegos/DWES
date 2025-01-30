@extends('layouts.app')

@section('content')
    <h1>Libros</h1>
    <div class="nav-links">
        <a href="{{ route('autores.index') }}">Autores</a>
        <a href="{{ route('libros.index') }}">Libros</a>
        <a href="{{ route('alquileres.index') }}">Alquileres</a>
        <a href="{{ route('usuarios.index') }}">Usuarios</a>
    </div>
    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
    @if (!session('setup_completed'))
        <form action="{{ route('setup') }}" method="POST">
            @csrf
            <button type="submit">Setup Database</button>
        </form>
    @endif
    <a href="{{ route('libros.create') }}"><button>Añadir Libro</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Autor</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Accion</th>
                <th></th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->id_libro }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->categoria }}</td>
                    <td>{{ $libro->nombre_autor }}</td>
                    <td>{{ $libro->descripcion }}</td>
                    <td>{{ $libro->precio }}</td>
                    <td><a href="{{ route('libros.edit', $libro->id_libro) }}"><button>Editar</button></a></td>
                    <td>
                        <form action="{{ route('libros.destroy', $libro->id_libro) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="gap"></div>
@endsection