<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <h1>Lista de Peliculas</h1>
    <ul>
      <?php foreach ($peliculas as $key => $pelicula): ?>
      <li><?= $pelicula ?></li>
    <?php endforeach; ?>
    </ul>

    {{-- BLADE --}}
    {{-- c. Modificar la sintaxis de la vista anterior, implementando blade. --}}
    <h1>Lista de Peliculas por Blade</h1>
    <ul>
      @foreach ($peliculas as $key => $pelicula)
        <li> {{$pelicula}} </li>
      @endforeach
    </ul>

    {{-- d. Modificar la vista creada para que en el caso de no haber ninguna
    película se lea el mensaje “No hay películas”. Probar dicho caso. --}}
    <h1>Lista de Peliculas por Blade</h1>
    <ul>
      @php
        var_dump($peliculas);
      @endphp
      @foreach ($peliculas as $key => $pelicula)
        <li> {{$pelicula}} </li>
      @empty
        <li> No hay películas </li>
      @endforeach
    </ul>

  </body>
</html>
