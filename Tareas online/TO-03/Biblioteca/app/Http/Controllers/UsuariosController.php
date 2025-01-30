<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function destroy($id)
    {
        DB::table('usuarios')->where('id_usuario', $id)->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario borrado exitosamente');
    }

    public function edit($id)
    {
        $usuario = DB::table('usuarios')->where('id_usuario', $id)->first();
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        DB::table('usuarios')->where('id_usuario', $id)->update([
            'nombreusuario' => $request->nombreusuario,
            'telefono' => $request->telefono,
        ]);
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        DB::table('usuarios')->insert([
            'nombreusuario' => $request->nombreusuario,
            'telefono' => $request->telefono,
        ]);
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
    }
}