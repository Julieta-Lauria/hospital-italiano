<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ ltrim(public_path('css/ppdf.css'), '/') }}" />
    <title>Reporte Informativo hospital italiano</title>
    <?php $options_columns = ['Opciones sin mover', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>
  </head>
  <body>

        <main>

          <div class="navbar-header">

              <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
              <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">

              <h2 class="headertitle">Herramienta para la toma de decisiones compartidas</h2>

          </div>



          <div id="details" class="clearfix">
            <div id="invoice">
              <h1>Informe {{ $invoice }}</h1>
              <div class="date">Fecha: {{ $date }}</div>
            </div>
          </div>

          <div class="">
            <h2>Grafico de ayuda:</h2>
              <div class="grafico2pdf">
                <img src="img/graf2.png" class="graf2impresion">
              </div>
          </div>


          <div class="">
            <!-- <h2>Grafico de ayuda:</h2> -->
              <div class="grafico3pdf">
                <img src="img/graf3.png" class="graf3impresion">
              </div>
          </div>

          <div class="">
            <h2>Infografia con riesgos y beneficios</h2>
              <div class="grafico1pdf">
                <img src="img/grafico1.png" style = "width: 700px;" style = "height: 400px;">
              </div>
          </div>

          <div class="">
            <h2>Tabla de decisiones:</h2>
              <div class="dragpdf">
              <?php echo $data ?>
              </div>
          </div>

        </body>
  </html>
