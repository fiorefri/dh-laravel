@extends('plantilla')

@section('titulo', "Actor {{$actor->id}}")

@section('principal')
  {{-- En la vista actor.blade.php, utilizando Blade, mostrar todos los datos del
  actor. --}}
  {{-- @dd($actor) --}}
  <p>
    Id:                     {{$actor->id}} <br>
    Nombre:                 {{$actor->first_name}} <br>
    Apellido:               {{$actor->last_name}} <br>
    Rating:                 {{$actor->rating}} <br>
    Película favorita (id): {{$actor->favorite_movie_id}}
  </p>
@endsection
