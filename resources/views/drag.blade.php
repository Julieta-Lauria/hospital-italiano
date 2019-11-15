<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./css/app.css">
  <title>Lo más importante para vos</title>
  <?php $options_columns = ['Afirmaciones', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>


  <script type="text/javascript">
      function myFunction() {
      //  var  z = document.forms[0];
        var  z = document.getElementById("divform");
        var  y = z.innerHTML;
        var c = document.getElementById('comment').value;
        //console.log(c)
  // ---------
        document.getElementById("form_html").value=y;
  // ---------
      }
  </script>

  <script type="text/javascript">
        function addcomment() {
            document.getElementById("comment").style.display = "block";
        }
  </script>

  </head>
  <body>
  <!-- partial:index.partial.html -->
  <section class="section drag-title">
    <h2 class="drag-h2">Lo más importante para vos: ¿Con cuál de estas afirmaciones te sentirías más identificada? </h2>
    <p>Ordene las siguientes frases si está de acuerdo, en desacuerdo o ni de acuerdo o desacuerdo con estas afirmaciones.
</p>
  </section>

  <form class="" action="{{url('pdf')}}" id="" method="post" onsubmit="myFunction()">
  @csrf
  <div class="drag-container" id="divform">
  	<ul class="drag-list">


      <li class="drag-column drag-column-on-hold">
        <span class="drag-column-header">
  				<h2 class="afirmaciones">Afirmaciones</h2>
  			</span>
  			<div class="drag-options" id="options1"></div>
        <ul class="drag-inner-list <?php echo $options_columns[0]; ?>" id="1">
          <li class="drag-item">Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>
          <li class="drag-item">No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>
          <li class="drag-item">La mamografía es muy molesta y la paso mal haciéndome el estudio</li>
          <li class="drag-item">Hacerme la mamografía me da tranquilidad</li>
          <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>
          <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>
          <li class="drag-item">Me genera ansiedad o miedo esperar el resultado de la mamografía</li>
          <li class="drag-item">Me genera ansiedad o miedo repetirme estudios</li>
          <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>
          <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>
          <li class="drag-item">Prefiero que esta decisión la tome mi médico/a</li>
        </ul>
  		</li>


      <li class="drag-column drag-column-in-progress">
  			<span class="drag-column-header">
  				<h2>Nada identificada</h2>
  			</span>
  			<div class="drag-options" id="options2"></div>
  			<ul class="drag-inner-list <?php echo $options_columns[1]; ?>" id="2">
  				<!-- <li class="drag-item"></li> -->
  			</ul>
  		</li>


      <li class="drag-column drag-column-needs-review">
  			<span class="drag-column-header">
  				<h2>Un poco identificada</h2>
  			</span>
  			<div class="drag-options" id="options3"></div>
  			<ul class="drag-inner-list <?php echo $options_columns[2]; ?>" id="3">
  				<!-- <li class="drag-item"></li> -->
  			</ul>
  		</li>


      <li class="drag-column drag-column-approved">
  			<span class="drag-column-header">
  				<h2>Muy identificada</h2>
  			</span>
  			<div class="drag-options" id="options4"></div>
  			<ul class="drag-inner-list <?php echo $options_columns[3]; ?>" id="4">
  				<!-- <li class="drag-item"></li> -->
  			</ul>
  		</li>
    </ul>


  </div>
  <!-- <section class="comentarios-medico">
    <p class="btn-comment">Comentarios del Médico</p>
    <textarea id="comment" name="comment" class="comment" placeholder="Escriba sus comentarios.."></textarea>
  </section>

  <input id="form_html" name="form_html" type="hidden">


  <section class="section">
    <input name="enviar" type="submit" value='Generar Reporte' id="enviar" class="boton-reporte">
  </section> -->



  </form>



  <!-- partial -->
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js'></script>
  <script  src="./js/script.js"></script>


  </body>
  </html>
