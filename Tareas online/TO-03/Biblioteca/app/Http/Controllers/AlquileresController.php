<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquileresController extends Controller
{
    public function index()
    {
        $alquileres = DB::table('alquileres')
            ->join('libros', 'alquileres.libro_id', '=', 'libros.id_libro')
            ->join('usuarios', 'alquileres.usuario_id', '=', 'usuarios.id_usuario')
            ->select('alquileres.*', 'libros.titulo as titulo_libro', 'usuarios.nombreusuario as nombre_usuario')
            ->get();
        return view('alquileres.index', ['alquileres' => $alquileres]);
    }

    public function destroy($id)
    {
        DB::table('alquileres')->where('alquiler_id', $id)->delete();
        return redirect()->route('alquileres.index')->with('success', 'Alquiler borrado exitosamente');
    }

    public function edit($id)
    {
        $alquiler = DB::table('alquileres')->where('alquiler_id', $id)->first();
        $libros = DB::table('libros')->get();
        $usuarios = DB::table('usuarios')->get();
        return view('alquileres.edit', ['alquiler' => $alquiler, 'libros' => $libros, 'usuarios' => $usuarios]);
    }

    public function update(Request $request, $id)
    {
        DB::table('alquileres')->where('alquiler_id', $id)->update([
            'libro_id' => $request->libro_id,
            'usuario_id' => $request->usuario_id,
            'fechprestamo' => $request->fechprestamo,
            'fechdevolucion' => $request->fechdevolucion,
        ]);
        return redirect()->route('alquileres.index')->with('success', 'Alquiler actualizado exitosamente');
    }

    public function create()
    {
        $libros = DB::table('libros')->get();
        $usuarios = DB::table('usuarios')->get();
        return view('alquileres.create', ['libros' => $libros, 'usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        DB::table('alquileres')->insert([
            'libro_id' => $request->libro_id,
            'usuario_id' => $request->usuario_id,
            'fechprestamo' => $request->fechprestamo,
            'fechdevolucion' => $request->fechdevolucion,
        ]);
        return redirect()->route('alquileres.index')->with('success', 'Alquiler creado exitosamente');
    }
}