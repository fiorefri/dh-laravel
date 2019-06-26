<?php
// Crear un modelo para la tabla Movies.
// php artisan make:model Movie --> Para crear los modelos
// Si se llama Movie va a buscar la tabla movies en la db
// Solo funciona si esta en ingles, se tiene que tener todas las tablas en ingles para que funcione

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
// class Peliculas extends Model
{
  // Optativos en caso de no respetar el standard
  // protected $table = "movies"; // Si la tabla no se llama movies se tiene que declarar
  // protected $primaryKey = "id_pelicula"; // Si la clave primaria de la tabla tiene un nombre diferente a "id"
  // protected $timestamps = false; // Cuando no se encuentra creada create_at en la tabla

  // Obligatorio para guardar datos (Una de las dos, normalmente la primera)
  protected $guarded = []; // Identificar los campos que NO puedo asignar masivamente
  // protected $fillable = []; // Identificar los campos que SI puedo asignar masivamente
}
