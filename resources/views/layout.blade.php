<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App-Comer</title>
</head>
<link rel="stylesheet"  href="/css/app.css">
<body>
    <header>
        <?php
          function activa($url){
            return request()->is($url) ? 'nav-item active' : '';
           //{{request()->url()}}
          }
        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
            <a class="navbar-brand" href="{{ route('home') }}">APP-COMER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                @if(auth()->guest())
                    <li class="{{ activa('/') }}">
                      <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="{{ route('login') }}">Login</a>
                    </li>
                @endif

                @if(auth()->check())
                  <li class="{{ activa('visitas*') }}">
                    <a class="nav-link" href="{{ route('visitas.index') }}">Visitas</a>
                  </li>
                  <li class="{{ activa('cobros') }}">
                    <a class="nav-link" href="{{ route('cobros.index') }}">Cobros</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="/logout">Cerrar Session {{auth()->user()->name}}</a>
                  </li>
                @endif

              </ul>
            </div>
          </nav>
   </header>
   <div class="container">
      @yield('contenido')
      <br>
      <footer>
        <p>&copy; 2018 </p>
      </footer>
    </div>

</body>
</html>
