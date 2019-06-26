<style media="screen">
  .formularios {
    padding: 10px 10px 0;
    display: flex;
  }

  .form1 {
    padding-right: 5px;
  }
</style>

@extends('plantilla')

@section('titulo')
  {{-- En la vista recientemente creada, ingresar un título e ingresar a
  localhost:8000/actores y verificar que se vea correctamente. --}}
  Actores
@endsection

@section('principal')
  {{-- @dd($actores) --}}

  {{-- En la vista actores.blade.php, mostrar una lista de los nombres de los
  actores utilizando Blade. --}}
  {{-- <ul>
    @foreach ($actores as $actor)
      <li>{{$actor->getNombreCompleto()}}</li>
    @endforeach
  </ul> --}}

  <div class="formularios">
    {{-- En la vista actores.blade.php, crear un formulario que tenga únicamente
    un campo de texto. Este formulario tendrá el objetivo de buscar actores.
    (Tener en cuenta que el formulario deberá apuntar a la ruta
    /actores/buscar) --}}
    <form class="form1" action="/actores/search" method="get">
      <input type="text" name="search" value="" placeholder="Nombre">

      <input type="submit" name="" value="Enviar">
    </form>

    {{-- Agregar en actores.blade.php un segundo formulario con el botón
    “Limpiar”, que envíe a la ruta original sin filtros de búsqueda. --}}
    <form class="form2" action="/actores" method="get">
      <input type="submit" name="" value="Limpiar">
    </form>
  </div>

  {{-- Modificar la vista actores.blade.php para que el nombre de cada actor sea
  un link al detalle de los datos de cada actor. --}}
  {{-- Modificar el listado para que los resultados aparezcan paginados. Modificar
  todos los controladores necesarios --}}
   <ul>
     @foreach ($actores as $actor)
       <li><a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li>
     @endforeach
   </ul>

   @if (count($actores))
     {{$actores->links()}}
   @endif
@endsection
