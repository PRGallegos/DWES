@extends('layouts.app')

@section('content')
    <h1>Autores</h1>
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
    <a href="{{ route('autores.create') }}"><button>Añadir Autor</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Accion</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
                <tr>
                    <td>{{ $autor->id }}</td>
                    <td>{{ $autor->nombre }}</td>
                    <td>{{ $autor->apellidos }}</td>
                    <td>{{ $autor->nacionalidad }}</td>
                    <td>{{$autor->sexo }}</td>
                    <td>{{$autor->edad }}</td>
                    <td><a href="{{ route('autores.edit', $autor->id) }}"><button>Editar</button></a></td>
                    <td>
                        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST">
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