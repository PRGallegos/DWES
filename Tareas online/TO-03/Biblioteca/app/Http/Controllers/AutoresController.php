<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoresController extends Controller
{
    public function index()
    {
        $autores = DB::table('autores')->get();
        return view('autores.index', ['autores' => $autores]);
    }

    public function destroy($id)
    {
        DB::table('autores')->where('id', $id)->delete();
        return redirect()->route('autores.index')->with('success', 'Autor borrado exitosamente');
    }

    public function edit($id)
    {
        $autor = DB::table('autores')->where('id', $id)->first();
        return view('autores.edit', ['autor' => $autor]);
    }

    public function update(Request $request, $id)
    {
        DB::table('autores')->where('id', $id)->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'nacionalidad' => $request->nacionalidad,
            'sexo' => $request->sexo,
            'edad' => $request->edad,
        ]);
        return redirect()->route('autores.index')->with('success', 'Autor actualizado exitosamente');
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        DB::table('autores')->insert([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'nacionalidad' => $request->nacionalidad,
            'sexo' => $request->sexo,
            'edad' => $request->edad,
        ]);
        return redirect()->route('autores.index')->with('success', 'Autor creado exitosamente');
    }
}