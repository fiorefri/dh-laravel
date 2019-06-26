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

// CLASE 1:
// Crear una ruta a /miPrimeraRuta, y que al ingresar, devuelva “Creé
// mi primer ruta en Laravel”.
Route::get("miPrimeraRuta",function() {
  return "Creé mi primera ruta en Laravel";
});

// Crear una ruta /esPar/{numero}, y que al ingresar, devuelva un string
// indicando si el número es par o impar.
Route::get("esPar/{numero}", function($numero) {
  if ($numero % 2 == 0) {
    return "El número $numero es par";
  } else {
    return "El número $numero es impar";
  }
});

// Crear una ruta llamada sumar que reciba dos números como
// parámetros. La ruta debe retornar la suma de ambos números.
// Route::get("sumar/{num1}/{num2}", function($num1, $num2){
//   return $num1 + $num2;
// });

// Modificar la ruta anterior para que pueda recibir un nuevo parámetro
// opcional. Es decir, si la ruta anterior recibe el nuevo parámetro, debe
// sumar los tres números, en caso contrario, debe realizar la suma
// original
Route::get("sumar/{num1}/{num2}/{num3?}", function($num1, $num2, $num3 = null) {
  return $num1 + $num2 + $num3;
});

// Crear una ruta /peliculas. Esta ruta debe definir un array que
// contenga los títulos de 5 películas.
// Route::get("peliculas", function() {
//   $peliculas = [
//     "pelicula 1" => "Frozen",
//     "pelicula 2" => "Tangled",
//     "pelicula 3" => "The Lion King",
//     "pelicula 4" => "Aladdin",
//     "pelicula 5" => "Mulan"
//   ];
//   return dd($peliculas); // Nuevo var_dump pero tambien es un exit
// });

// Crear la vista peliculas.blade.php, y asociarla a la ruta
// peliculas, enviando el array de películas ya definido. Mostrar en la
// vista, el listado de películas utilizando la sintaxis de PHP clásica.
Route::get("peliculas", function() {
  $peliculas = [
    1 => ["titulo" => "Frozen", "rating" => 7],
    2 => ["titulo" => "Tangled", "rating" => 10],
    3 => ["titulo" => "The Lion King", "rating" => 8],
    4 => ["titulo" => "Aladdin", "rating" => 9],
    5 => ["titulo" => "Mulan", "rating" => 7]
  ];
  return view("peliculas", compact("peliculas"));
});

// Crear la ruta /peliculas/{id} que tome del array de películas, la
// posición dada en {id} y muestre el título y rating de dicha película en la
// vista detallePelicula.blade.php.
Route::get("peliculas/{id}", function($id) {
  $peliculas = [
    ["id" => 1, "titulo" => "Frozen", "rating" => 7],
    ["id" => 2, "titulo" => "Tangled", "rating" => 10],
    ["id" => 3, "titulo" => "The Lion King", "rating" => 8],
    ["id" => 4, "titulo" => "Aladdin", "rating" => 9],
    ["id" => 5, "titulo" => "Mulan", "rating" => 7]
  ];
  return view("detallePelicula", compact("peliculas", "id"));
});

// CLASE 2:
Route::get('peliculas', "MovieController@index"); // Busca en el controlador el metodo "index"
Route::get('actores', "ActorController@index");

// Crear la ruta /actores/buscar, que redirigirá al método
// ActorController@search, y retorne la vista actores.blade.php.
Route::get('actores/search', "ActorController@search");

// Crear la ruta /actor/{id}, que redirigirá al método ActorController@show,
// y retorne la vista actor.blade.php.
Route::get('actor/{id}', "ActorController@show"); // Todos los parametros parametrizados siempre van al final
