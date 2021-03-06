<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>@yield('title','Voluntario')</title> <!-- pode ser substituido ou mantido padrão-->

    @section('style') <!-- pode ser substituido -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    @show

  </head>

  <body>

    @include('partials.navbar') <!-- Definindo menu em arquivo separado-->

    <div class="container">

     @if (count($errors) > 0) <!-- isso só esta sendo renderezado quando entra no IF -->
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

        @yield('container') <!-- sera substituido -->

    </div><!-- /.container -->

    @section('script') <!-- pode ser substituido -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

    @show

  </body>
</html>
