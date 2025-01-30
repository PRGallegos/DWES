<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetupController extends Controller
{
    public function setup()
    {
        if (DB::table('autores')->count() > 0) {
            session(['setup_completed' => true]);
            return redirect()->route('index')->with('message', 'Setup already completed.');
        }

        DB::table('autores')->insert([
            ['apellidos' => 'Benigni', 'nombre' => 'Roberto', 'nacionalidad' => 'italiana', 'sexo' => 'M', 'edad' => 30],
            ['apellidos' => 'Meyer', 'nombre' => 'Stephenie', 'nacionalidad' => 'estadounidense', 'sexo' => 'F', 'edad' => 43],
            ['apellidos' => 'Descartes', 'nombre' => 'Rene', 'nacionalidad' => 'frances', 'sexo' => 'M', 'edad' => 48],
            ['apellidos' => 'Shakespeare', 'nombre' => 'William', 'nacionalidad' => 'britanica', 'sexo' => 'M', 'edad' => 34],
            ['apellidos' => 'Hemingway', 'nombre' => 'Ernest', 'nacionalidad' => 'estadounidense', 'sexo' => 'M', 'edad' => 51],
            ['apellidos' => 'Larsson', 'nombre' => 'Stieg', 'nacionalidad' => 'Sueca', 'sexo' => 'M', 'edad' => 46],
            ['apellidos' => 'Follet', 'nombre' => 'Ken', 'nacionalidad' => 'estadounidense', 'sexo' => 'M', 'edad' => 50],
            ['apellidos' => 'Kepler', 'nombre' => 'Lars', 'nacionalidad' => 'Sueca', 'sexo' => 'M', 'edad' => 38],
            ['apellidos' => 'Neville', 'nombre' => 'Katherine', 'nacionalidad' => 'estadounidense', 'sexo' => 'F', 'edad' => 41],
            ['apellidos' => 'Connelly', 'nombre' => 'Michael', 'nacionalidad' => 'estadounidense', 'sexo' => 'M', 'edad' => 52],
            ['apellidos' => 'Sierra', 'nombre' => 'Javier', 'nacionalidad' => 'española', 'sexo' => 'M', 'edad' => 49],
            ['apellidos' => 'Brown', 'nombre' => 'Dan', 'nacionalidad' => 'estadounidense', 'sexo' => 'M', 'edad' => 56],
            ['apellidos' => 'Kostova', 'nombre' => 'Elizabeth', 'nacionalidad' => 'estadounidense', 'sexo' => 'F', 'edad' => 55],
            ['apellidos' => 'Ruiz Zafon', 'nombre' => 'Carlos', 'nacionalidad' => 'español', 'sexo' => 'M', 'edad' => 62],
            ['apellidos' => 'Hawkins', 'nombre' => 'Paula', 'nacionalidad' => 'zimbaunse', 'sexo' => 'F', 'edad' => 45],
        ]);

        DB::table('libros')->insert([
            ['titulo' => 'Luna Nueva', 'categoria' => 'fantasia', 'autor_id' => 2, 'descripcion' => 'Escrito por Stephanie', 'precio' => 21.10],
            ['titulo' => 'Crepusculo', 'categoria' => 'fantasia', 'autor_id' => 2, 'descripcion' => 'Un amor peligroso', 'precio' => 21.10],
            ['titulo' => 'Hamlet', 'categoria' => 'tragedia', 'autor_id' => 4, 'descripcion' => 'Escrito por Shakespeare', 'precio' => 14.20],
            ['titulo' => 'La reina en el paraiso de las corrientes de aire', 'categoria' => 'novela', 'autor_id' => 6, 'descripcion' => 'trilogia de Stieg', 'precio' => 17.45],
            ['titulo' => 'El viejo y el mar', 'categoria' => 'ficcion', 'autor_id' => 5, 'descripcion' => 'Escrito por Hemingway', 'precio' => 15.90],
            ['titulo' => 'Discurso del metodo', 'categoria' => 'filosofia', 'autor_id' => 3, 'descripcion' => 'Escrito por Descartes', 'precio' => 12.60],
            ['titulo' => 'La vida es bella', 'categoria' => 'historica', 'autor_id' => 1, 'descripcion' => 'Escrito por Roberto Benigni', 'precio' => 11.50],
            ['titulo' => 'La chica que soñaba con una cerilla y un bidon de gasolina', 'categoria' => 'novela', 'autor_id' => 6, 'descripcion' => 'trilogia de Stieg', 'precio' => 17.45],
            ['titulo' => 'Los pilares de la tierra', 'categoria' => 'narrativa', 'autor_id' => 7, 'descripcion' => 'Escrito por Ken Follet', 'precio' => 19.50],
            ['titulo' => 'El hipnotista', 'categoria' => 'policiaca', 'autor_id' => 8, 'descripcion' => 'Escrito por Lars Kepler', 'precio' => 18.12],
            ['titulo' => 'El ocho', 'categoria' => 'intriga', 'autor_id' => 9, 'descripcion' => 'escrito por Katherine Neville', 'precio' => 16.75],
            ['titulo' => 'Luna Funesta', 'categoria' => 'ficcion', 'autor_id' => 10, 'descripcion' => 'Escrito por Michael Connelly', 'precio' => 18.21],
            ['titulo' => 'Eclipse', 'categoria' => 'fantasia', 'autor_id' => 2, 'descripcion' => 'Unos dicen que el mundo sucumbira en el fuego', 'precio' => 21.10],
            ['titulo' => 'Los hombres que no amaban a las mujeres', 'categoria' => 'novela', 'autor_id' => 6, 'descripcion' => 'trilogia de Stieg', 'precio' => 17.45],
            ['titulo' => 'Amanecer', 'categoria' => 'fantasia', 'autor_id' => 2, 'descripcion' => 'Un amor peligroso', 'precio' => 21.10],
            ['titulo' => 'El hombre de arena', 'categoria' => 'policiaca', 'autor_id' => 8, 'descripcion' => 'el inspector Joona Linna', 'precio' => 16.70],
        ]);

        DB::table('usuarios')->insert([
            ['nombreusuario' => 'Ana Jimenez', 'password' => '1111', 'telefono' => '950121212', 'fechentrega' => '2019-10-10'],
            ['nombreusuario' => 'Antonio Bueno', 'password' => '1111', 'telefono' => '950454545', 'fechentrega' => '2019-10-10'],
            ['nombreusuario' => 'Maria Jose Garcia', 'password' => '1111', 'telefono' => '690909090', 'fechentrega' => '2019-09-10'],
            ['nombreusuario' => 'Jose Alonso', 'password' => '1111', 'telefono' => '950505050', 'fechentrega' => '2018-07-02'],
            ['nombreusuario' => 'Paula Santiago', 'password' => '1111', 'telefono' => '950343434', 'fechentrega' => '2019-03-25'],
            ['nombreusuario' => 'Manolo Lopez', 'password' => '1111', 'telefono' => '950123456', 'fechentrega' => '2019-02-28'],
            ['nombreusuario' => 'Paula Gil', 'password' => '1111', 'telefono' => '950999999', 'fechentrega' => '2019-10-10'],
            ['nombreusuario' => 'Teo Suarez', 'password' => '1111', 'telefono' => '950111111', 'fechentrega' => '2019-03-25'],
            ['nombreusuario' => 'Rocio Merino', 'password' => '1111', 'telefono' => '710808080', 'fechentrega' => '2019-02-28'],
        ]);

        DB::table('alquileres')->insert([
            ['libro_id' => 5, 'usuario_id' => 2, 'fechprestamo' => '2019-08-07', 'fechdevolucion' => '2019-09-14'],
            ['libro_id' => 3, 'usuario_id' => 2, 'fechprestamo' => '2019-06-07', 'fechdevolucion' => '2019-10-11'],
            ['libro_id' => 3, 'usuario_id' => 4, 'fechprestamo' => '2019-07-07', 'fechdevolucion' => '2019-08-18'],
            ['libro_id' => 2, 'usuario_id' => 1, 'fechprestamo' => '2019-08-09', 'fechdevolucion' => '2019-09-24'],
            ['libro_id' => 2, 'usuario_id' => 3, 'fechprestamo' => '2019-04-07', 'fechdevolucion' => '2019-05-23'],
            ['libro_id' => 5, 'usuario_id' => 3, 'fechprestamo' => '2019-04-12', 'fechdevolucion' => '2019-06-14'],
            ['libro_id' => 5, 'usuario_id' => 3, 'fechprestamo' => '2019-09-21', 'fechdevolucion' => '2019-10-28'],
            ['libro_id' => 5, 'usuario_id' => 3, 'fechprestamo' => '2019-05-06', 'fechdevolucion' => '2019-07-16'],
            ['libro_id' => 7, 'usuario_id' => 5, 'fechprestamo' => '2019-10-07', 'fechdevolucion' => '2019-11-11'],
            ['libro_id' => 1, 'usuario_id' => 2, 'fechprestamo' => '2019-07-06', 'fechdevolucion' => '2019-08-18'],
            ['libro_id' => 4, 'usuario_id' => 1, 'fechprestamo' => '2019-09-07', 'fechdevolucion' => '2019-10-09'],
            ['libro_id' => 4, 'usuario_id' => 6, 'fechprestamo' => '2019-10-12', 'fechdevolucion' => '2019-11-21'],
            ['libro_id' => 7, 'usuario_id' => 6, 'fechprestamo' => '2019-10-07', 'fechdevolucion' => '2019-11-05'],
        ]);

        session(['setup_completed' => true]);
        return redirect()->route('index')->with('message', 'Setup completed successfully.');
    }
}