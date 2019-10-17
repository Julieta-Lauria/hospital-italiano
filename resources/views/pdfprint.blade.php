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
            <h2>Definiciones</h2>
              <div class="definiciones">
                <p>Falsas alarmas:<br>Cuando la mamografía muestra una anomalía que podría ser cáncer, hay que hacer otros estudios para aclarar. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la anomalía era benigna, decimos que fue una falsa alarma.</p>
                <p>Sobrediagnóstico:<br>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p>
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
