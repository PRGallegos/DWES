@extends('layouts.app')

@section('content')
    <h1>Biblioteca</h1>
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
@endsection