<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    // Crear la ruta /actores, que redirigirá al método
    // ActorController@directory, y retorne la vista actores.blade.php.
    // public function directory() {
    //   return view("actores");
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // En el controlador recientemente creado, utilizando Eloquent, obtener todos
     // los actores dentro de una variable $actores, y enviarla a la vista. (Se
     // recomienda utilizar el método all. Recordar ingresar la línea “use
     // App\Actor” para importar el modelo)
     // Agregar al modelo Actor, el método getNombreCompleto.
    public function index()
    {
      $actores = Actor::paginate(10)
      ->withPath('actores');
      return view("/actores", compact("actores")); // actores.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // En el controlador ActorController, utilizando Eloquent, obtener el actor en
    // función del ID que recibimos por URL. Guardar el actor en la variable $actor,
    // y enviarla a la vista. (Se recomienda utilizar el método find)
    public function show($id)
    {
      $actor = Actor::find($id);
      return view("actor", compact("actor"));
    }

    // En el controlador ActorController, utilizando Eloquent, obtener los actores
    // cuyo nombre contenga los caracteres buscados. Guardar el actor en la
    // variable $actores, y enviarla a la vista. (Se recomienda utilizar el método
    // where)
    // Modificar el resultado de las búsquedas para que muestre el listado de
    // actores ordenados por apellido.
    public function search(){
      $buscar = $_GET['search'];
      $actores = Actor::where('first_name', 'like', "%$buscar%")
      ->orderBy('last_name')
      ->paginate(5)
      ->withPath('/actores/search');
      // ->get();
      return view("actores", compact("actores")); //->with("actores", $actores)
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
