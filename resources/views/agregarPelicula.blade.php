@extends('plantilla')

@section('titulo', "Agregar Pelicula")

@section('principal')
  {{-- Utilizar el formulario para agregar películas, y validar que todos los campos sean requeridos. --}}
  {{-- Modificar el formulario para que, en caso de haber un error, recupere los campos que el
  usuario ya había completado. ---> old('nombre') --}}
  <form id="agregarPelicula" name="agregarPelicula" action="/agregarPelicula" method="POST">
    {{-- Laravel pide un token de seguridad para los formularios, se tiene que poner alguna de las dos --}}
    @csrf
    {{-- {{csrf_field()}} --}}
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="titulo" value="{{old('title')}}"/>
    </div>
    <div>
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating" value="{{old('rating')}}"/>
    </div>
    <div>
        <label for="premios">Premios</label>
        <input type="text" name="premios" id="premios" value="{{old('premios')}}"/>
    </div>
    <div>
        <label for="duracion">Duracion</label>
        <input type="text" name="length" id="duracion" value="{{old('length')}}"/>
    </div>
    <div>
        <label>Fecha de Estreno</label>
        <input type="date" name="release_date" value="" value="{{old('date')}}">
    </div>
    <input type="submit" value="Agregar Pelicula" name="submit"/>
  </form>

  {{-- Modificar el formulario para que, en caso de que los haya, muestre los errores en la vista --}}
  <ul>
    @foreach ($errors->all() as $error)
      {{$error}}
    @endforeach
  </ul>
@endsection
