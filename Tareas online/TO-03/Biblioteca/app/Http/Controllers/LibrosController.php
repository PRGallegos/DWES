<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = DB::table('libros')
            ->join('autores', 'libros.autor_id', '=', 'autores.id')
            ->select('libros.*', 'autores.nombre as nombre_autor')
            ->get();
        return view('libros.index', ['libros' => $libros]);
    }

    public function create()
    {
        $autores = DB::table('autores')->get();
        return view('libros.create', ['autores' => $autores]);
    }

    public function store(Request $request)
    {
        DB::table('libros')->insert([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'autor_id' => $request->autor_id,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente');
    }

    public function destroy($id)
    {
        DB::table('libros')->where('id_libro', $id)->delete();
        return redirect()->route('libros.index')->with('success', 'Libro borrado exitosamente');
    }

    public function edit($id)
    {
        $libro = DB::table('libros')->where('id_libro', $id)->first();
        $autores = DB::table('autores')->get();
        return view('libros.edit', ['libro' => $libro, 'autores' => $autores]);
    }

    public function update(Request $request, $id)
    {
        DB::table('libros')->where('id_libro', $id)->update([
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'autor_id' => $request->autor_id,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente');
    }
}