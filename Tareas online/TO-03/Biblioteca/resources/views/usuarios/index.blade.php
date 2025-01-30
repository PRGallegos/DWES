@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>
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
    <a href="{{ route('usuarios.create') }}"><button>Añadir Usuario</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Accion</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id_usuario }}</td>
                    <td>{{ $usuario->nombreusuario }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td><a href="{{ route('usuarios.edit', $usuario->id_usuario) }}"><button>Editar</button></a></td>
                    <td>
                        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
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