<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Verificador de Números Primos</h1>
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    @if(session('resultado'))
        <p style="color: green;">{{ session('resultado') }}</p>
    @endif
    <form action="{{ url('/verificar-primo') }}" method="post">
        @csrf
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
