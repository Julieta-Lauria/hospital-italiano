<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/app.css">
  <title>@yield("titulo")</title>

</head>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">
      <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="#">Herramienta para la toma de decisiones compartidas</a></li>
    </ul>
  </div>
</nav>

@yield("principal")


<footer>
  <p>© 2019. Todos los derechos reservados.</p>
</footer>
</body>
</html>
