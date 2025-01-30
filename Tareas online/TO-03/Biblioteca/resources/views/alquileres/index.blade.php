@extends('layouts.app')

@section('content')
    <h1>Alquileres</h1>
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
    <a href="{{ route('alquileres.create') }}"><button>Añadir Alquiler</button></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Usuario</th>
                <th>Fecha de Alquiler</th>
                <th>Fecha de Devolución</th>
                <th>Accion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres->sortBy('alquiler_id') as $alquiler)
                <tr>
                    <td>{{ $alquiler->alquiler_id }}</td>
                    <td>{{ $alquiler->titulo_libro }}</td>
                    <td>{{ $alquiler->nombre_usuario }}</td>
                    <td>{{ $alquiler->fechprestamo }}</td>
                    <td>{{ $alquiler->fechdevolucion}}</td>
                    <td><a href="{{ route('alquileres.edit', $alquiler->alquiler_id) }}"><button>Editar</button></a></td>
                    <td>
                        <form action="{{ route('alquileres.destroy', $alquiler->alquiler_id) }}" method="POST">
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