<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $peliculas = Movie::all();
      return view('peliculas', compact("peliculas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("agregarPelicula");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request) // request es todo lo que manda Laravel por POST
     {
      // Agregar reglas que permitan validar que cada tipo de dato sea correcto, así como sus
      // mínimos y máximos. (ver listado de reglas aquí
      $rules = [
         "title"         => "filled|string|max:50",
         "rating"        => "filled",
         "premios"       => "filled|integer",
         "length"        => "filled|integer",
         "release_date"  => "filled|date"
      ];

      $messages = [
         "filled"   => ":attribute debe estar completo", // Busca el atributo que falla
         "string"   => "El campo debe ser cadena de texto",
         "max"      => "El campo debe tener como maximo 50 caracteres",
         "integer"  => "El campo debe ser numerico",
         "date"     => ":attribute tiene que ser una fecha"
      ];

      $this->validate($request, $rules, $messages); // Validate necesita un request, reglas de validacion y mensajes de error

      // Validar que al crear una película o un actor, no exista otro/a con el mismo nombre.
      if (Movie::where('title', '=', $request->title)->count() > 0) {
        return view("agregarPelicula");
      } else {
        $movie               = new Movie; // Creo la instancia de la clase
        $movie->title         = $request->title;
        $movie->rating        = $request->rating;
        $movie->awards        = $request->premios;
        $movie->length        = $request->length;
        $movie->release_date  = $request->release_date;

        $movie->save(); // Tambien sirve para hacer actualizaciones
        return redirect('/peliculas');
      }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
