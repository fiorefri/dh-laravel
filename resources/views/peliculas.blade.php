{{-- Agregar soporte para que cada página pueda agregar hojas de estilo
según la página. Hacer pruebas de esta funcionalidad. --}}
<style media="screen">
  * {
    color: blue;
  }
</style>

@extends('plantilla')

@section('titulo')
  Listado de Peliculas
@endsection

@section('principal')
  {{-- <h1>Lista de Peliculas</h1> --}}
  {{-- Lista creada con foreach y php --}}

  {{-- BLADE --}}
  {{-- Modificar la sintaxis de la vista anterior, implementando blade. --}}
  {{-- <h1>Lista de Peliculas por Blade</h1>
  <ul>
    @foreach ($peliculas as $key => $pelicula)
      <li> {{$pelicula}} </li>
    @endforeach
  </ul> --}}

  {{-- Modificar la vista creada para que en el caso de no haber ninguna
  película se lea el mensaje “No hay películas”. Probar dicho caso. --}}
  {{-- <h1>Lista de Peliculas por Blade con empty</h1>
  <ul>
    @dd($peliculas)
    @forelse ($peliculas as $key => $pelicula)
      <li> {{$pelicula}} </li>
    @empty
      <li> No hay películas </li>
    @endforelse
  </ul> --}}

  {{-- Modificar el array de películas original para que cada película no sea
  solamente un título sino un conjunto de título y rating. Realizar las
  adaptaciones necesarias en la vista para que siga funcionando todo. --}}
  {{-- Agregarle al listado un mensaje al lado de las películas que tengan
  rating mayor a 8 que diga “Recomendada”. --}}

  <h1>Lista de Peliculas</h1>
  <ul>
    @forelse ($peliculas as $key => $pelicula)
      @if ($pelicula["rating"] > 8)
        <li> {{$pelicula["titulo"]}} | {{$pelicula["rating"]}} | Recomendada</li>
      @else
        <li> {{$pelicula["titulo"]}} | {{$pelicula["rating"]}} </li>
      @endif
    @empty
      <li> No hay películas </li>
    @endforelse
  </ul>
@endsection
