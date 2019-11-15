@extends("plantilla-2")

<!-- SE INCLUYEN LOS ARCHIVOS DE LAS 3 PARTES DE LA TAB DEL DRAG -->
<!-- FORMULARIO -->
@section("form")
  @include('form')
@endsection

<!-- DRAG -->
@section("drag")
  @include('drag')
@endsection

<!-- COMNETARIOS -->
@section("comments")
  @include('comments')
@endsection


<!-- CONTENIDO DE LA TAB1 - Se puede elegir -->
@section("elegir")
<h3 class="tab-h3">Se puede elegir</h3>
<p>Frecuentemente las mujeres nos enfrentamos con la decisión de optar por un estudio para detectar precozmente el cáncer de mama:<strong> la mamografía.</strong> Puede ser porque:</p>
  <div class="tab1">
    <div class="tab1-cuadro"><img src="img/doctor.png" alt=""><p>Nos lo recomienda un profesional de la salud</p></div>
    <div class="tab1-cuadro"><img src="img/advertising.png" alt=""><p>Lo vimos en una <br>publicidad</p></div>
    <div class="tab1-cuadro"><img src="img/chat.png" alt=""><p>Nos lo contó un/a amigo/a o familiar</p></div>
    <div class="tab1-cuadro"><img src="img/work.png" alt=""><p>Lo tenemos incorporado como un chequeo de “rutina”</p></div>
  </div>
  <p class="tab1-p">Como toda decisión médica, tiene opciones, con sus ventajas y desventajas, y es importante que los conozcas para que puedas decidir cuál es la mejor opción para vos. <strong>Tanto realizar como no realizar un estudio de detección precoz del cáncer de mama son opciones razonables.</strong></p>
  <div class="alert-container-tab1">
    <div class="alert alert-primary alerta-tab1">
      <p><strong>Atención: </strong>Si pensás que hablar de los riesgos o desventajas de una intervención te puede generar ansiedad (por ejemplo leer el prospecto de los medicamentos) te recomendamos que no utilices esta herramienta.</p>
    </div>
  </div>
@endsection


<!-- CONTENIDO DE LA TAB2 - Que es el cancer de mama? -->
@section("cancerdemama")
<h3 class="tab-h3">¿Qué es el cáncer de mama?</h3>
<p>Es una enfermedad causada por el crecimiento anormal de células de la mama que forman un tumor maligno. Las posibilidades de que aparezca aumentan con la edad, principalmente a partir de los 50 años.</p>
<p class="strong"><strong>¿Se puede prevenir?</strong></p>
<p>Hay factores que aumentan el riesgo de tener cáncer de mama que se pueden modificar:</p>
<div class="tab2">
  <div class="tab2-fila1">
    <div class="tab2-cuadro claro"><p>Sobrepeso</p><img src="img/obesity.png" alt=""></div>
    <div class="tab2-cuadro oscuro"><img src="img/cigarette.png" alt=""><p>Tabaquismo</p></div>
  </div>
    <div class="tab2-fila2">
      <div class="tab2-cuadro claro"><p>Sedentarismo</p><img src="img/watching-tv.png" alt=""></div>
      <div class="tab2-cuadro oscuro"><img src="img/wine-bottle.png" alt=""><p>Consumo excesivo de alcohol </p></div>
    </div>
</div>
<p class="strong"><strong>¿Qué es y por qué se ofrece el “chequeo” o tamizaje del cáncer de mama?</strong></p>
<p>El tamizaje consiste en examinar sistemáticamente a un grupo de <strong>personas que no tienen síntomas* </strong>con el fin de detectar precozmente una enfermedad y mejorar los resultados en salud. </p>
<div class="tab2-alert-container">
  <div class="alert alert-primary tab2-alerta">
    <p><strong>* </strong>Si notás un cambio en tus mamas debés consultar al médico sin demora (un bulto palpable, cambios en la textura o enrojecimiento de la piel de las mamas o el pezón, secreción o
    sangrado por el pezón).
  </div></p>
</div>
@endsection

<!-- CONTENIDO DE LA TAB3 - Mamografia -->
@section("mamografia")
<h3 class="tab-h3">Mamografía</h3>
<section>
  <div class="tab3">
    <p>El <strong>único</strong> método recomendado y que demostró ser efectivo para la detección precoz del cáncer de mama es la <strong>mamografía.</strong>
    Durante la prueba la mama se comprime entre dos placas planas y se saca una radiografía. Algunas mujeres experimentan molestia o dolor según la sensibilidad de sus mamas.
    </p>
  </div>
  <div class="beneficios-riesgos">
    <div class="beneficios">
      <h2>Posibles ventajas</h2>
      <div class="beneficio">
        <p class="benef"><i class="fas fa-thumbs-up"></i>Sensación de seguridad</p>
        <p class="descripcion">Algunas mujeres sienten tranquilidad y satisfacción al recibir una mamografía con un resultado normal.</p>
      </div>
      <div class="beneficio" id="benef-2">
          <p class="benef"><i class="fas fa-thumbs-up"></i>Reduce las muertes por cáncer de mama </p>
        <p class="descripcion">Este es el objetivo del tamizaje con mamografía al detectar y tratar lesiones de forma temprana, aunque no evita el cáncer de mama.</p>
      </div>
      <div class="beneficio" id="benef-3">
        <p class="benef"><i class="fas fa-thumbs-up"></i>Acceder a tratamientos menos invasivos</p>
        <p class="descripcion">Al detectar el cáncer de mama en estadíos tempranos se puede tratar con cirugías más simples o conservadoras y requerir menos quimioterapia.</p>
      </div>
    </div>
    <div class="riesgos">
      <h2>Posibles desventajas</h2>
      <div class="riesgo">
        <p class="risk"><i class="fas fa-thumbs-down"></i>No detecta todos los cánceres</p>
        <p class="descripcion">Algunos tumores crecen muy rápido y pueden aparecer inclusive al hacerse controles regulares y tener mamografías previas normales.</p>
      </div>
      <div class="riesgo">
        <a class="display-3" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">falsas alarmas</strong></span></p></i><span class="">Cuando la mamografía muestra una anomalía que podría ser cáncer, hay que hacer otros estudios para aclarar. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la anomalía era benigna, decimos que fue una falsa alarma.</span></a>
        <p class="descripcion">Algunas mujeres deberán repetir estudios por lesiones benignas que no quedan claras. Estos pueden demorar semanas y algunas mujeres experimentan angustia, ansiedad o temor.</p>
      </div>
      <div class="riesgo">
        <a class="display-4" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">tratamientos innecesarios</strong></span></p></i><span class="">Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</span></a>
        <p class="descripcion">El tamizaje encuentra algunos cánceres de mama que no hubieran producido síntomas o daño durante tu vida. Esto conlleva cirugías, radioterapia y quimioterapia innecesarias. Es lo que llamamos “sobrediagnóstico” y “sobretratamiento".</p>
      </div>
    </div>
  </div>
</section>
@endsection

<!-- CONTENIDO DE LA TAB4 - Mujeres de 40 a 49 -->
@section("40a49")
<div class="mySlides2">
<img src="img/grafico40-49.svg" alt="" class="grafico50-69">
<div class="col text-center">
  <button class="btn btn-danger" onclick="plusDivs2(+1)">Siguiente</button><br>
  <!-- <button class="btn btn-primary" onclick="plusDivs(-1)">Anterior</button> -->
</div>
</div>
<div class="mySlides2">
  <h3 class="tab-h3">¿Cuánto representan 1000 mujeres?</h3>
  <p class="strong">Imaginemos la platea de un teatro llena:</p>
  <div class="container">
    <div class="con-tamizaje">
      <p class="strong titulo-color-naranja"><strong>1000 mujeres de 40 a 49 años con tamizaje</strong></p>
      <img class="parlamento-imagen" src="img/4049-con-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">986 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 21 tienen diagnóstico de cáncer de mama (por tamizaje o síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 11 sobreviven al cáncer de mama con o sin tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-4"></i><p> 1 evita morirse de cáncer de mama gracias al tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-5"></i><p> 7 son sobrediagnosticadas por el tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-1"></i><p> 239 tienen falsas alarmas</p>
          </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">14 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 2 mueren de cáncer de mama a pesar del tamizaje</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 12 mueren de otras causas</p>
        </div>
      </div>
    </div>
    <div class="sin-tamizaje">
      <p class="strong titulo-color-turquesa"><strong>1000 mujeres de 40 a 49 años sin tamizaje</strong></p>
      <img class="parlamento-imagen" src="img/4049-sin-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">985 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 14 tienen diagnóstico de cáncer de mama (por síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 11 sobreviven al cáncer de mama con o sin tamizaje</p>
        </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">15 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 3 mueren de cáncer de mama a pesar del tamizaje</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 12 mueren de otras causas</p>
        </div>
      </div>
    </div>
  </div>
  <p class="panel-fuente">Fuente:
    Barratt A, Howard K, Irwig L, Salkeld G, Houssami N. Model of outcomes of screening mammography: information to support informed choices. British Medical Journal. 2005; 330: 936.
    Independent UK Panel on Breast Cancer Screening. The benefits and harms of breast cancer screening:an independent review. Lancet. 2012; 380: 1778
    Public Health Agency Of Canada. Information on Mammography for Women Aged 40 and Older : A Decision Aid for Breast Cancer Screening in Canada. 2009. 1–32 p.

  </p>
  <div class="col text-center">
    <!-- <button class="btn btn-primary" onclick="plusDivs(+1)">Siguiente</button><br> -->
    <button class="btn btn-danger" onclick="plusDivs2(-1)">Anterior</button>
  </div>
</div>
<script type="text/javascript">
var slideIndex2 = 1;
showDivs2(slideIndex2);

function plusDivs2(n) {
showDivs2(slideIndex2 += n);
}

function showDivs2(n) {
var i;
var x = document.getElementsByClassName("mySlides2");
if (n > x.length) {slideIndex2 = 1}
if (n < 1) {slideIndex2 = x.length}
for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
}
x[slideIndex2-1].style.display = "block";
}
</script>
@endsection

<!-- CONTENIDO DE LA TAB5 - Mujeres de 50 a 69 -->
@section("50a69")
<div class="mySlides">
<img src="img/grafico50-69.svg" alt="" class="grafico50-69">
<div class="col text-center">
  <button class="btn btn-danger" onclick="plusDivs(+1)">Siguiente</button><br>
  <!-- <button class="btn btn-primary" onclick="plusDivs(-1)">Anterior</button> -->
</div>
</div>
<div class="mySlides">
  <h3 class="tab-h3">¿Cuánto representan 1000 mujeres?</h3>
  <p class="strong">Imaginemos la platea de un teatro llena:</p>
  <div class="container">
    <div class="con-tamizaje">
      <p class="strong titulo-color-naranja"><strong>1000 mujeres de 50 a 69 años con tamizaje</strong></p>
      <img class="parlamento-imagen" src="img/5069-con-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">885 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 73 tienen diagnóstico de cáncer de mama (por tamizaje o síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 42 sobreviven al cáncer de mama con o sin tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-4"></i><p> 4 evitan morirse de cáncer de mama gracias al tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-5"></i><p> 19 son sobrediagnosticadas por el tamizaje</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-1"></i><p> 412 tienen falsas alarmas</p>
          </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">115 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 8 mueren de cáncer de mama a pesar del tamizaje</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 107 mueren de otras causas</p>
        </div>
      </div>
    </div>
    <div class="sin-tamizaje">
      <p class="strong titulo-color-turquesa"><strong>1000 mujeres de 50 a 69 años sin tamizaje</strong></p>
      <img class="parlamento-imagen" src="img/5069-sin-tamizage.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">881 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 54 tienen diagnóstico de cáncer de mama (por síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 42 sobreviven al cáncer de mama con o sin tamizaje</p>
        </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">115 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 8 mueren de cáncer de mama a pesar del tamizaje</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 107 mueren de otras causas</p>
        </div>
      </div>
    </div>
  </div>
  <p class="panel-fuente">Fuente:
  Barratt A, Howard K, Irwig L, Salkeld G, Houssami N. Model of outcomes of screening mammography: information to support informed choices. British Medical Journal. 2005; 330: 936.
  Independent UK Panel on Breast Cancer Screening. The benefits and harms of breast cancer screening:an independent review. Lancet. 2012; 380: 1778
  Public Health Agency Of Canada. Information on Mammography for Women Aged 40 and Older : A Decision Aid for Breast Cancer Screening in Canada. 2009. 1–32 p.
  </p>
  <div class="col text-center">
    <!-- <button class="btn btn-primary" onclick="plusDivs(+1)">Siguiente</button><br> -->
    <button class="btn btn-danger" onclick="plusDivs(-1)">Anterior</button>
  </div>
</div>
<script type="text/javascript">
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
}

function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length}
for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}
</script>
@endsection

<!-- CONTENIDO DE LA TAB6 - Glosario -->
@section("glosario")
<h3 class="tab-h3">Glosario</h3>
<p><strong>Falsas alarmas:</strong></p>
<p>Cuando la mamografía muestra una alteración que podría ser cáncer, hay que hacer otros estudios para aclarar de qué se trata. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la alteración era benigna, decimos que fue una falsa alarma. Hay algunas mujeres que expresan que estas falsas alarmas les generan ansiedad y miedo.</p>
<p><strong>Un diagnóstico de cáncer que no daña o “tumores inofensivos” (también llamado “sobrediagnóstico”):</strong></p>
<p>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p>
@endsection

<!-- CONTENIDO DE LA TAB7 - Prevenir el cancer de mama -->
@section("prevenir")
<h3 class="tab-h3"> Prevenir el cáncer de mama</h3>
<p>Como comentamos antes, la mamografía ayuda a detectar precozmente cánceres de mama pero no previene la aparición de la enfermedad.</p>
<p>Modificando los factores de riesgo podríamos prevenir el cáncer de mama y otros cánceres. ¿Qué impacto tendrían estas modificaciones?
</p>
  <div class="tab1">
    <div class="tab1-cuadro tab7-cuadro"><img src="img/diet.png" alt=""><p>Mantener un peso saludable podría prevenir:<br><br>4.600 casos de cáncer de mama<br>13.200 casos de cánceres totales por año</p></div>
    <div class="tab1-cuadro tab7-cuadro"><img src="img/no-alcohol.png" alt=""><p>Limitar el consumo de alcohol podría prevenir:<br><br>4.400 casos de cáncer de mama<br>6.200 casos de cánceres totales por año</p></div>
    <div class="tab1-cuadro tab7-cuadro"><img src="img/no-smoking.png" alt=""><p>Evitar el consumo de tabaco podría prevenir:<br><br>22.000 casos de cánceres totales por año</p></p></div>
  </div>
  @endsection

  <!-- CONTENIDO DE LA TAB8 - Referencias -->
  @section("referencias")
  <h3 class="tab-h3">Referencias</h3>
  <p>Barratt A, Howard K, Irwig L, Salkeld G, Houssami N. Model of outcomes of screening mammography: information to support informed choices. British Medical Journal. 2005; 330: 936.</p>
  <p>Brown, K.F., Rumgay, H., Dunlop, C. et al. The fraction of cancer attributable to modifiable risk factors in England, Wales, Scotland, Northern Ireland, and the United Kingdom in 2015. Br J Cancer 118, 1130–1141 (2018) doi:10.1038/s41416-018-0029-</p>
  <p>Di Sibio, AJ. Efectividad del tamizaje mamográfico en la reducción de la mortalidad por cáncer de mama. 1a ed. Ciudad Autónoma de Buenos Aires : Instituto Nacional del Cáncer; 2018. Disponible en <a href="http://www.msal.gob.ar/images/stories/bes/graficos/0000001138cnt-20180321-efectividad-tamizaje-mamografico-mortalidaden-cm.pdf" target="_blank">Efectividad del tamizaje mamográfico en la reducción de la mortalidad por cáncer de mama</a></p>
  <p>Independent UK Panel on Breast Cancer Screening. The benefits and harms of breast cancer screening:an independent review. Lancet. 2012; 380: 1778</p>
  <p>Public Health Agency Of Canada. Information on Mammography for Women Aged 40 and Older : A Decision Aid for Breast Cancer Screening in Canada. 2009. 1–32 p.</p>
  @endsection
