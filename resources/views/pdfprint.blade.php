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
          <h2>Esta decisión no es una urgencia</h2>
          <p>Decidir si una quiere realizarse o no una mamografía preventiva no es una urgencia. Hay tiempo para pensarlo, para charlarlo con familiares o amigo/as si es necesario. La decisión tampoco es estática, puede cambiar a lo largo del tiempo y querer volver a charlar este tema con su médico/a cuando lo desee.

          </p>
          <h2>Propósito del reporte</h2>
          <p>Este reporte resume información sobre los posibles beneficios y daños de la mamografía y sirve como complemento a lo charlado con su médico/a. Recibir información sanitaria clara y completa sobre intervenciones o estudios se enmarca dentro de la Ley 26.529 de Derechos del Paciente. Esto no representa un consentimiento informado, sino que intenta mejorar la información sanitaria que se brinda a las pacientes.</p>
          <p>Fomentar estas discusiones de ningún modo busca impedir o retrasar el acceso a la mamografía, sino brindar más autonomía e información para tomar decisiones a lo/as pacientes que así lo deseen. Si usted llegara a decidir que quiere hacerse una mamografía luego de retirarse de la consulta puede enviarle un mensaje a su médico de cabecera de lunes a viernes de 8 a 20 llamando al 4959-5050 o ingresando a su Portal de Salud (https://www1.hospitalitaliano.org.ar/#!/home/plan/salud) y seleccionando la opción “Mensajería”. Las órdenes de estudios son electrónicas de modo que no es necesario que pida un nuevo turno o se acerque a retirar ninguna orden para poder realizarse el estudio.</p>
          <h2>¿Qué es el cáncer de mama?</h2>
          <p>Es una enfermedad causada por el crecimiento anormal de células de la mama que forman un tumor maligno. La mayoría de los cánceres de mama (CM) se producen en mujeres mayores de 50 años sin antecedentes familiares de la enfermedad. Además de la edad, hay muchos otros factores predisponentes. Algunos se pueden modificar y otros no.</p>
          <h2>Factores predisponentes</h2>
          <p><strong>No modificables:</strong>
            <br>
            -Antecedentes familiares de CM, ovario o peritoneal: más probabilidades si se trata de hermanas, madres o hijas con CM antes de los 50 años o más de un familiar afectado (esto se considera probabilidad alta, no “promedio”).
            <br>
            -Haber recibido radioterapia en el pecho (esto se considera probabilidad alta, no “promedio”).
            <br>
            -Ciertas mutaciones genéticas (esto se considera probabilidad alta, no “promedio”).
            <br>
            -Que tienen biopsias previas con diagnóstico de “carcinoma ductal o lobar in situ” (esto se considera probabilidad alta, no “promedio”).
            <br>
            -Si la edad de la primera menstruación fue antes de los 12 años o de la última fue después de los 55 años.
            <br>
            -Si no se tuvo hijos o se los tuvo después de los 30 años.
            <br>
            -Haber recibido terapia de reemplazo hormonal.
            <br>
            -Mayor densidad mamaria.
          </p>
          <p><strong>Modificables:</strong>
            <br>
            -Obesidad en la postmenopausia: se asocia a 8,4% del total de CM (1800 casos anuales)
            <br>
            -Consumo excesivo de alcohol: se asocia a 8,1% del total de CM (1750 casos anuales)
            <br>
            -Tabaquismo: se asocia a un 35-40% más de riesgo de tener CM en mujeres que fumaron por al menos 5 años un paquete por día antes del primer embarazo.
            <br>
            -Sedentarismo: hacer actividad física reduce entre un 12-31% el riesgo de CM. Hacer cualquier actividad (por ejemplo subir escaleras por 10’ o caminar por 25’) fue mejor que la inactividad, pero a mayor intensidad de ejercicio se observó un mayor impacto.
          </p>
          <h2>Infografía con riesgos y beneficios</h2>
          <br>
          <br>
            <div class="grafico1pdf">
              @if ($edad < 50)
              <img src="img/grafico-40-1.png" alt="" style ="width: 700px;" style = "height: 400px;">
              <img src="img/grafico-40-2.png" alt="" style ="width: 700px;" style = "height: 400px;">
              <!-- <img src="{!! asset('img/grafico-40-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-40-2.png') !!}" style = "width: 700px;" style = "height: 400px;"> -->
              @else
              <img src="img/grafico-50-1.png" alt="" style ="width: 700px;" style = "height: 400px;">
              <img src="img/grafico-50-2.png" alt="" style ="width: 700px;" style = "height: 400px;">
              <!-- <img src="{!! asset('img/grafico-50-1.png') !!}" style = "width: 700px;" style = "height: 400px;">
              <img src="{!! asset('img/grafico-50-2.png') !!}" style = "width: 700px;" style = "height: 400px;"> -->
              @endif
            </div>
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


            <h2>Lo más importante para vos</h2>
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
