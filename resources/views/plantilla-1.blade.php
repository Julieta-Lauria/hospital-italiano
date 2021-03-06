<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.1.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="/css/app.css">
  <title>@yield("titulo")</title>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="http://www.hospitalitaliano.org.ar" target="_blank">
      <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
      </a>
      <a href="https://www.fundacionmf.org.ar/" target="_blank">
      <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">
      </a>
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="{{ url('/tabs')}}">Herramienta para la toma de decisiones compartidas</a></li>
    </ul>
  </div>
  <div class="container-fluid-tablet">
    <div class="navbar-header">
      <a href="http://www.hospitalitaliano.org.ar" target="_blank">
      <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
      </a>
      <ul class="nav navbar-nav ">
        <li class="active"><a href="{{ url('/tabs')}}">Herramienta para la toma de decisiones compartidas</a></li>
      </ul>
      <a href="https://www.fundacionmf.org.ar/" target="_blank">
      <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">
      </a>
      </div>
    </div>
      <!-- <div class="container-fluid-desktop">
        <div class="navbar-header">
          <a href="http://www.hospitalitaliano.org.ar" target="_blank">
          <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
          </a>
          <ul class="nav navbar-nav ">
            <li class="active" ><a href="{{ url('/tabs')}}" class="navbar-title">Herramienta para la toma de decisiones compartidas</a></li>
          </ul>
          <a href="https://www.fundacionmf.org.ar/" target="_blank">
            <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">
          </a>
      </div>
  </div> -->
  <div class="container-header">
    <div class="desktop-header">
      <div class="logo-hospital-container">
        <a href="http://www.hospitalitaliano.org.ar" target="_blank">
        <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
        </a>
      </div>
      <a href="{{ url('/tabs')}}" class="navbar-title">Herramienta para la toma de decisiones compartidas</a>
      <div class="logo-fundacion-container">
        <a href="https://www.fundacionmf.org.ar/" target="_blank">
          <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">
        </a>
      </div>

    </div>

  </div>
</nav>

@yield("principal")


<footer>
  <p class="footer">© 2019. Todos los derechos reservados. Icons made by <a href="https://www.flaticon.com/authors/popcorns-arts" title="Icon Pond">Icon Pond</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a><a href="https://www.freepik.com/free-photos-vectors/background">  Background vector created by freepik - www.freepik.com</a></p>
</footer>
</body>
</html>
