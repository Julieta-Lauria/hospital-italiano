<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! asset('css/ppdf.css') !!}" />
    <title>Reporte Informativo hospital italiano</title>
    <?php

        header('Content-type: application/pdf');//with header Content type

    ?>
    <?php $options_columns = ['No Responde','No Responde', 'En Desacuerdo', 'Ni acuerdo, ni desacuerdo', 'De Acuerdo'] ?>
  </head>
  <body>

        <main>

          <div class="divtitulo">
            <img class="titulopdf" src="{!! asset('img/titulopdf.png') !!}">
          </div>


          <!-- <div class="navbar-header">

              <img src="img/logo-hospital.jpg" alt="" class="logo-hospital">
              <h2 class="headertitle">Herramienta para la toma de decisiones compartidas</h2>
              <img src="img/logo-fundacion.jpg" alt="" class="logo-fundacion">

          </div> -->

            <div id="invoice">
              <div class="date">Fecha: {{ $date }}</div>
            </div>


          <!-- <div class="">
            <h2>Grafico de ayuda:</h2>

              <div class="grafico2pdf">
                <img src="img/graf2.png" class="graf2impresion">
              </div>

              <div class="grafico3pdf">
                <img src="img/graf3.png" class="graf3impresion">
              </div>

        </div> -->

<br>

          <h2>Infografía con riesgos y beneficios</h2>
          <br>
            <div class="grafico1pdf">
              @if ($edad < 50)
              <img src="{!! asset('img/grafico-pdf-40-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-pdf-40-2.png') !!}" style = "width: 700px;" style = "height: 400px;">
              @else
              <img src="{!! asset('img/grafico-pdf-50-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-pdf-50-2.png') !!}" style = "width: 700px;" style = "height: 400px;">
              @endif
            </div>
<br><br><br>
<br><br><br>
<br><br><br>
            <h2>Definiciones</h2>
              <div class="definiciones">
                <p><strong>Falsas alarmas:</strong><br><br>Cuando la mamografía muestra un hallazgo que aumenta el nivel de sospecha y motiva a realizar más estudios hasta que finalmente se determina que se trata de una condición benigna. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Algunas mujeres expresan que estas falsas alarmas les generan ansiedad y miedo.</p>
                <p><strong>Sobrediagnóstico:</strong><br><br>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p><br>
              </div>


              <br>

<?php
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isMobile();
    //dd($result);
   ?>


            <h2>Tabla de decisiones:</h2>
            <br>

            @if ($result == false)
              <div class="dragpdf">
              <?php echo $data ?>
              </div>


            @elseif ($result == true)
              <div class="dragpdf">
<!-- ?php echo $options_columns[$_POST['afirmacion1'] ?>
{{$options_columns[$_POST['afirmacion1']]}} -->



                <li class="drag-item">Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>
                <?php if (isset($_POST['afirmacion1'])) {
                    echo $options_columns[$_POST['afirmacion1']];
                } else {
                    echo "No Responde";
                } ?>

                 <li class="drag-item">No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion2']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">La mamografía es muy molesta y la paso mal haciéndome el estudio</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion3']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion4']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion5']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">Me genera ansiedad o miedo esperar el resultado de la mamografía</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion6']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">Me genera ansiedad o miedo repetirme estudios</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion7']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion8']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion9']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">Prefiero que esta decisión la tome mi médico/a</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion10']];
                 } else {
                     echo "No Responde";
                 } ?>

                 <li class="drag-item">Hacerme la mamografía me da tranquilidad</li>
                 <?php if (isset($_POST['afirmacion1'])) {
                     echo $options_columns[$_POST['afirmacion11']];
                 } else {
                     echo "No Responde";
                 } ?>

              </div>
            @endif

<br>
            <h2>Comentarios:</h2>
              <div class="dragpdf">
              <p>{{ $comment }} </p>
              </div>


        </body>
  </html>
