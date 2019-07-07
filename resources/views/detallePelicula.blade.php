{{-- Agregar soporte para que cada página pueda agregar hojas de estilo
según la página. Hacer pruebas de esta funcionalidad. --}}
<style media="screen">
  * {
    color: red;
  }
</style>

@extends('plantilla')

@section('titulo', "Pelicula $id")

@section('principal')
  <ul>
    {{-- Modificar la vista detallePelicula.blade.php para que muestre un
    mensaje en caso de que el id no sea válido o no corresponda con
    ninguna película --}}
    @foreach ($peliculas as $pelicula)
      @if ($id == $pelicula["id"])
        <li>{{$pelicula["titulo"]}} | {{$pelicula["rating"]}}</li>
      @endif
    @endforeach
    @if ($id > count($peliculas) && $id < count($peliculas))
      <li>El id no es válido para ninguna pelicula</li>
    @endif
  </ul>
@endsection
