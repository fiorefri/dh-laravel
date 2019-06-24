<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// a. Crear una ruta a /miPrimeraRuta, y que al ingresar, devuelva “Creé
// mi primer ruta en Laravel”.
Route::get("/miPrimeraRuta",function() {
  return "Creé mi primera ruta en Laravel";
});

// b. Crear una ruta /esPar/{numero}, y que al ingresar, devuelva un string
// indicando si el número es par o impar.
Route::get("/esPar/{numero}", function($numero) {
  if ($numero % 2 == 0) {
    return "El número $numero es par";
  } else {
    return "El número $numero es impar";
  }
});

// c. Crear una ruta llamada sumar que reciba dos números como
// parámetros. La ruta debe retornar la suma de ambos números.
Route::get("/sumar/{num1}/{num2}", function($num1, $num2){
  return $num1 + $num2;
});

// d. Modificar la ruta anterior para que pueda recibir un nuevo parámetro
// opcional. Es decir, si la ruta anterior recibe el nuevo parámetro, debe
// sumar los tres números, en caso contrario, debe realizar la suma
// original
Route::get("/sumar/{num1}/{num2}/{num3?}", function($num1, $num2, $num3 = null) {
  return $num1 + $num2 + $num3;
});

// a. Crear una ruta /peliculas. Esta ruta debe definir un array que
// contenga los títulos de 5 películas.
Route::get("/peliculas", function() {
  $peliculas = [
    "pelicula 1" => "Frozen",
    "pelicula 2" => "Tangled",
    "pelicula 3" => "The Lion King",
    "pelicula 4" => "Aladdin",
    "pelicula 5" => "Mulan"
  ];
  return dd($peliculas); // Nuevo var_dump pero tambien es un exit
});

// b. Crear la vista peliculas.blade.php, y asociarla a la ruta
// peliculas, enviando el array de películas ya definido. Mostrar en la
// vista, el listado de películas utilizando la sintaxis de PHP clásica.
Route::get("/peliculas", function() {
  $peliculas = [
    // "pelicula 1" => "Frozen",
    // "pelicula 2" => "Tangled",
    // "pelicula 3" => "The Lion King",
    // "pelicula 4" => "Aladdin",
    // "pelicula 5" => "Mulan"
  ];
  return view("peliculas", compact("peliculas"));
});
