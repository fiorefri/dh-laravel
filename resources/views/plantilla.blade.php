<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    {{-- Modificar el layout para que el <title> de cada página varie según la
    página final. Agregarle un <title> a todas las páginas. --}}
    <title>@yield('titulo')</title>
  </head>
  <body>
    <style media="screen">
      * {
        text-decoration: none;
        color: #000;
        list-style-type: none;
        padding: 4px;
      }
    </style>
    {{-- Modificar todas las vistas creadas en esta guía para que la estructura
    global de HTML pase a formar parte de un layout. --}}
    @yield('principal')
  </body>
</html>
