<html lang="en" >
<head>
<?php $options_columns = ['Afirmaciones', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Reporte para entrega</title>

</head>
<body>

      <main>


        <div class="container-fluid-tablet">
          <div class="navbar-header">

            <img src="img/logo-hospital.jpg" alt="" class="logo-hospital" style = "height: 90px;">
            <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion" style = "height: 90px;">

            <ul class="nav navbar-nav ">
              <h2>Herramienta para la toma de decisiones compartidas</h2>
            </ul>

            </div>
          </div>


        <div id="details" class="clearfix">
          <div id="invoice">
            <h1>Reporte {{ $invoice }}</h1>
            <div class="date">Fecha: {{ $date }}</div>
          </div>
        </div>

        <div class="">
          <h2>Grafico de ayuda:</h2>
            <div class="grafico2pdf">




            </div>
        </div>





        <div class="">
          <h2>Tabla de desiciones:</h2>
            <div class="dragpdf">
            <?php echo $data ?>
            </div>
        </div>


</body>
</html>
