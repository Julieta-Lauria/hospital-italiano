<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="{!! asset('css/ppdf.css') !!}" /> -->
    <title>Reporte Informativo hospital italiano</title>
    <?php

        header('Content-type: application/pdf');//with header Content type

    ?>
    <?php $options_columns = ['No Responde','No Responde', 'En Desacuerdo', 'Ni acuerdo, ni desacuerdo', 'De Acuerdo'] ?>
  </head>
  <body>

        <main>

          <div class="divtitulo">
            <!-- <img class="titulopdf" src="{!! asset('img/titulopdf.png') !!}"> -->
          </div>



            <div id="invoice">
              <div class="date">Fecha: {{ $date }}</div>
            </div>



<br>

          <h2>Infografía con riesgos y beneficios</h2>
          <br>
            <div class="grafico1pdf">
              @if ($edad < 50)
              <!-- <img src="{!! asset('img/grafico-pdf-40-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-pdf-40-2.png') !!}" style = "width: 700px;" style = "height: 400px;"> -->
              @else
              <!-- <img src="{!! asset('img/grafico-pdf-50-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-pdf-50-2.png') !!}" style = "width: 700px;" style = "height: 400px;"> -->
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

<?php

  if (isset($_POST['afirmacion1'])) {
    $respuestas[1][$_POST['afirmacion1']] = "<li class='drag-item'>Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>";
  }else if ( $_POST['afirmacion1']== null || $_POST['afirmacion1']== 0 ) {
    $respuestas[1][1] = "<li class='drag-item'>Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>";
  }

  if (isset($_POST['afirmacion2'])) {
    $respuestas[2][$_POST['afirmacion2']] = "<li class='drag-item'>No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>";
  }else if ( $_POST['afirmacion2']== null || $_POST['afirmacion2']== 0 )  {
    $respuestas[2][1] = "<li class='drag-item'>No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>";
  }

  if (isset($_POST['afirmacion3'])) {
    $respuestas[3][$_POST['afirmacion3']] = "<li class='drag-item'>La mamografía es muy molesta y la paso mal haciéndome el estudio</li>";
  }else {
    $respuestas[3][1] = "<li class='drag-item'>La mamografía es muy molesta y la paso mal haciéndome el estudio</li>";
  }

  if (isset($_POST['afirmacion4'])) {
    $respuestas[4][$_POST['afirmacion4']] = "<li class='drag-item'>La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>";
  }else {
    $respuestas[4][1] = "<li class='drag-item'>La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>";
  }

  if (isset($_POST['afirmacion5'])) {
    $respuestas[5][$_POST['afirmacion5']] = "<li class='drag-item'>La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>";
  }else {
    $respuestas[5][1] = "<li class='drag-item'>La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>";
  }

  if (isset($_POST['afirmacion6'])) {
    $respuestas[6][$_POST['afirmacion6']] = "<li class='drag-item'>Me genera ansiedad o miedo esperar el resultado de la mamografía</li>";
  }else {
    $respuestas[6][1] = "<li class='drag-item'>Me genera ansiedad o miedo esperar el resultado de la mamografía</li>";
  }

  if (isset($_POST['afirmacion7'])) {
    $respuestas[7][$_POST['afirmacion7']] = "<li class='drag-item'>Me genera ansiedad o miedo repetirme estudios</li>";
  }else {
    $respuestas[7][1] = "<li class='drag-item'>Me genera ansiedad o miedo repetirme estudios</li>";
  }

  if (isset($_POST['afirmacion8'])) {
    $respuestas[8][$_POST['afirmacion8']] = "<li class='drag-item'>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>";
  }else {
    $respuestas[8][1] = "<li class='drag-item'>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>";
  }

  if (isset($_POST['afirmacion9'])) {
    $respuestas[9][$_POST['afirmacion9']] = "<li class='drag-item'>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>";
  }else {
    $respuestas[9][1] = "<li class='drag-item'>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>";
  }

  if (isset($_POST['afirmacion10'])) {
    $respuestas[10][$_POST['afirmacion10']] = "<li class='drag-item'>Prefiero que esta decisión la tome mi médico/a</li>";
  }else {
    $respuestas[10][1] = "<li class='drag-item'>Prefiero que esta decisión la tome mi médico/a</li>";
  }

  if (isset($_POST['afirmacion11'])) {
    $respuestas[11][$_POST['afirmacion11']] = "<li class='drag-item'>Hacerme la mamografía me da tranquilidad</li>";
  }else {
    $respuestas[11][1] = "<li class='drag-item'>Hacerme la mamografía me da tranquilidad</li>";
  }


// $a1 = "Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo";
// $a2 = "No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas";
// $a3 = "La mamografía es muy molesta y la paso mal haciéndome el estudio";
// $a4 = "La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA";
// $a5 = "La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA";
// $a6 = "Me genera ansiedad o miedo esperar el resultado de la mamografía";
// $a7 = "Me genera ansiedad o miedo repetirme estudios";
// $a8 = "La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA";
// $a9 = "La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA";
// $a10 = "Prefiero que esta decisión la tome mi médico/a";
// $a11 = "Hacerme la mamografía me da tranquilidad";

?>



                    <li class="drag-column drag-column-on-hold">
                       <span class="drag-column-header">
                         <h2 class="afirmaciones">No Responde</h2>
                       </span>
                       <div class="drag-options" id="options1"></div>
                       <ul class="drag-inner-list Afirmaciones" id="1">


                          <?php

                          for ($i=1; $i <= 11 ; $i++) {
                              if ( isset($respuestas[$i][1]) )  {
                              echo $respuestas[$i][1];
                            }
                          }
                          for ($i=1; $i <= 11 ; $i++) {
                              if ( isset($respuestas[$i][0]) )  {
                              echo $respuestas[$i][0];
                            }
                          }

                          ?>


                       </ul>
                     </li>


                     <li class="drag-column drag-column-in-progress">
                       <span class="drag-column-header">
                         <h2>En Desacuerdo</h2>
                       </span>
                       <div class="drag-options" id="options2"></div>
                       <ul class="drag-inner-list Nada identificada" id="2">


                         <?php

                         for ($i=1; $i <= 11 ; $i++) {
                             if ( isset($respuestas[$i][2]) )  {
                             echo $respuestas[$i][2];
                           }
                         }

                          ?>

                         </ul>
                     </li>


                     <li class="drag-column drag-column-needs-review">
                       <span class="drag-column-header">
                         <h2>Ni acuerdo, ni desacuerdo</h2>
                       </span>
                       <div class="drag-options" id="options3"></div>
                       <ul class="drag-inner-list Poco identificada" id="3">

                         <?php

                         for ($i=1; $i <= 11 ; $i++) {
                             if ( isset($respuestas[$i][3]) )  {
                             echo $respuestas[$i][3];
                           }
                         }

                          ?>
                           </ul>
                      </li>


                     <li class="drag-column drag-column-approved">
                       <span class="drag-column-header">
                         <h2>De Acuerdo</h2>
                       </span>
                       <div class="drag-options" id="options4"></div>
                       <ul class="drag-inner-list Muy identificada" id="4">
                         <?php

                         for ($i=1; $i <= 11 ; $i++) {
                             if ( isset($respuestas[$i][4]) )  {
                             echo $respuestas[$i][4];
                           }
                         }

                          ?>
                        </ul>
                     </li>


            @endif

<br>
            <h2>Comentarios:</h2>
              <div class="dragpdf">
              <p>{{ $comment }} </p>
              </div>


        </body>
  </html>
