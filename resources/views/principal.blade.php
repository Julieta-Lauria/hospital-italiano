@extends("plantilla-2")




<!-- CONTENIDO DE LA TAB1 - Se puede elegir -->
@section("elegir")
<h3 class="tab-h3">Se puede elegir</h3>
<p>Frecuentemente las pacientes se enfrentan con la decisión de optar por un estudio para detectar precozmente el cáncer de mama:<strong> la mamografía.</strong> Puede ser porque:</p>
  <div class="tab1">
    <div class="tab1-cuadro"><img src="img/doctor-1.png" alt=""><p>Nos lo recomienda un profesional de la salud</p></div>
    <div class="tab1-cuadro"><img src="img/chat.png" alt=""><p>Vimos una publicidad o nos lo contó un amigo/a o familiar</p></div>
    <div class="tab1-cuadro"><img src="img/work.png" alt=""><p>Lo tenemos incorporado como un chequeo de “rutina”</p></div>
    <div class="tab1-cuadro"><img src="img/breast-cancer.png" alt=""><p>Tenemos miedo de tener cáncer de mama</p></div>
  </div>
  <p class="tab1-p">Como toda decisión médica tiene opciones: tanto realizar como no realizar la mamografía son opciones razonables. Cada opción tiene sus ventajas y desventajas, y es importante que las pacientes las conozcan para decidir bien informadas cuál es la mejor opción para ellas.</p>
  <div class="alert-container-tab1">
    <div class="alert alert-primary alerta-tab1">
      <p><strong>Atención: </strong>Si pensás que hablar de las desventajas de una intervención le puede generar ansiedad a tu paciente (por ejemplo si leer el prospecto de los medicamentos le genera preocupación o malestar) te recomendamos que no utilices esta herramienta con ella.</p>
    </div>
  </div>
@endsection


<!-- CONTENIDO DE LA TAB2 - Factores predisponentes -->
@section("cancerdemama")
<h3 class="tab-h3">Factores predisponentes</h3>
<div class="masinfo">
  <span class="tab2-span">La mayoría de los cánceres de mama (CM) se producen en mujeres mayores de 50 años sin antecedentes familiares de la enfermedad. Además de la edad, hay muchos otros factores predisponentes. Algunos se pueden modificar y otros no.</span>
  <button class="accordion-5"><span class="mas-info">Más información<i class="fas fa-info-circle"></i></span></button>
    <div class="panel panel-5">
  <p><strong>Factores NO modificables:</strong>
<br>-Antecedentes familiares de CM, ovario o peritoneal: más probabilidades si se trata de hermanas, madres o hijas con CM antes de los 50 años o más de un familiar afectado (esto se considera probabilidad alta, no “promedio”).
<br>-Haber recibido radioterapia en el pecho (esto se considera probabilidad alta, no “promedio”).
<br>-Ciertas mutaciones genéticas (esto se considera probabilidad alta, no “promedio”).
<br>-Que tienen biopsias previas con diagnóstico de “carcinoma ductal o lobar in situ” (esto se considera probabilidad alta, no “promedio”).
<br>-Si la edad de la primera menstruación fue antes de los 12 años o de la última fue después de los 55 años.
<br>-Si no se tuvo hijos o se los tuvo después de los 30 años.
<br>-Haber recibido terapia de reemplazo hormonal.
<br>-Mayor densidad mamaria.
<br><br>
<strong>Factores modificables:</strong>
<br>-Obesidad en la postmenopausia
<br>-Tabaquismo
<br>-Sedentarismo
<br>-Consumo excesivo de alcohol
</p>
</div>
</div>
<script type="text/javascript">
var acc = document.getElementsByClassName("accordion-5");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
/* Toggle between adding and removing the "active" class,
to highlight the button that controls the panel */
this.classList.toggle("active");

/* Toggle between hiding and showing the active panel */
var panel = this.nextElementSibling;
if (panel.style.display === "block") {
  panel.style.display = "none";
} else {
  panel.style.display = "block";
}
});
}
</script>
<br>
<p>Si querés calcular las probabilidades que tiene tu paciente de desarrollar CM hacé click en esta<a href="https://bcrisktool.cancer.gov/calculator.html" target="_blank">Calculadora de riesgo.</a>. Recordá que lo que se considera “promedio” es tener entre un 12% y un 15% de probabilidad de tener un CM a lo largo de toda la vida.</p>
<p>De los factores que se pueden modificar (pasá el cursor por cada imagen para revelar más información):</p>
<div class="flip-card-container">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/obesity-128.png" alt="Avatar" style="width:100px;height:100px">
        <p><strong>Obesidad en la postmenopausia</strong></p>
      </div>
      <div class="flip-card-back">
            <p><strong>Obesidad en la postmenopausia</strong></p>
            <p class="flip-card-back-p">Se asocia a:</p><span class="tab7-porcentaje">8,4%⬆</span><p>del total de cánceres de mama (1800 casos anuales)</p>
    </div>
  </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/cigarette-128.png" alt="Avatar" style="width:100px;height:100px">
        <p><strong>Tabaquismo</strong></p>
      </div>
      <div class="flip-card-back">
            <p><strong>Tabaquismo</strong></p>
            <p class="flip-card-back-p">Se asocia a:</p><span class="tab7-porcentaje">35-40%⬆</span><p>mayor riesgo de tener cáncer de mama</p>
    </div>
  </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/watching-tv-128.png" alt="Avatar" style="width:100px;height:100px">
        <p><strong>Sedentarismo</strong></p>
      </div>
      <div class="flip-card-back">
            <p><strong>Actividad física regular</strong></p>
            <img src="img/bicycle.png" alt="" style="width:30px;height:30px">
            <p class="flip-card-back-p">Se asocia a:</p><span class="tab7-porcentaje porcentaje-menor">12-31%⬇</span><p>menor riesgo de tener cáncer de mama</p>
    </div>
  </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/wine-bottle-128.png" alt="Avatar" style="width:100px;height:100px">
        <p><strong>Exceso de alcohol</strong></p>
      </div>
      <div class="flip-card-back">
            <p><strong>Exceso de alcohol</strong></p>
            <p class="flip-card-back-p">Se asocia a:</p><span class="tab7-porcentaje">8,1%⬆</span><p>del total de cánceres de mama (1750 casos anuales)</p>
    </div>
  </div>
  </div>
</div>
<!-- <div class="tab2">
  <div class="tab2-fila1">
    <div class="tab2-cuadro claro"><p>Obesidad</p><img src="img/obesity.png" alt=""></div>
    <div class="tab2-cuadro oscuro"><img src="img/cigarette.png" alt=""><p>Tabaquismo</p></div>
  </div>
    <div class="tab2-fila2">
      <div class="tab2-cuadro claro"><p>Sedentarismo</p><img src="img/watching-tv.png" alt=""></div>
      <div class="tab2-cuadro oscuro"><img src="img/wine-bottle.png" alt=""><p>Consumo excesivo de alcohol </p></div>
    </div>
</div> -->
@endsection

<!-- CONTENIDO DE LA TAB3 - Detección precoz -->
@section("mamografia")
<h3 class="tab-h3">Detección precoz</h3>
<section>
  <!-- <div class="tab3"> -->
    <p class="strong"><strong>¿Qué es y por qué se ofrece la detección precoz con mamografía?</strong></p>
    <p>Algunas enfermedades como el cáncer de mama (CM) se pueden detectar precozmente cuando todavía no aparecieron síntomas<strong>*</strong> y así mejorar los resultados en salud, por ejemplo reducir las chances de morir por la enfermedad. El único método diagnóstico que demostró lograr esto es la mamografía.</p>
    <div class="tab2-alert-container">
      <div class="alert alert-primary tab2-alerta">
        <p>El Instituto Nacional del Cáncer de Argentina recomienda realizar una mamografía cada 2 años en mujeres de 50 a 69 años.
      </div></p>
  </div>
  <p>Durante la prueba la mama se comprime entre dos placas planas y se saca una radiografía. Algunas mujeres experimentan dolor o molestias durante el procedimiento.</p>
  <div class="tab2-alert-container">
    <div class="alert alert-primary tab2-alerta">
      <p><strong>*</strong>Recordale a tu paciente que si nota un cambio en sus mamas debe consultar a un médico sin demora (un bulto palpable, cambios en la textura o enrojecimiento de la piel de las mamas, secreción o sangrado por el pezón).
    </div></p>
  </div>
</section>
@endsection

<!-- CONTENIDO DE LA TAB4 - Mujeres de 40 a 49 -->
@section("40a49")
<div class="mySlides2">
<img src="img/grafico40-49-nuevo.svg" alt="" class="grafico50-69">
<div class="col text-center">
  <button class="btn btn-danger" onclick="plusDivs2(+1)">Siguiente</button><br>
  <!-- <button class="btn btn-primary" onclick="plusDivs(-1)">Anterior</button> -->
</div>
</div>
<div class="mySlides2">
  <h3 class="tab-h3">¿Cuánto representan 1000 mujeres de 40 a 49 años?</h3>
  <p class="strong subtitulo-teatro">Imaginemos la platea Teatro Coliseo o el Mercedes Sosa llena:</p>
  <div class="container">
    <div class="con-tamizaje">
      <p class="strong titulo-color-naranja"><strong>Con mamografía cada 2 años a lo largo de 10 años</strong></p>
      <img class="parlamento-imagen" src="img/4049-con-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">986 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 21 tienen diagnóstico de cáncer de mama (por mamografía o síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 11 sobreviven al cáncer de mama con o sin mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-4"></i><p> 1 evita morirse de cáncer de mama gracias a la mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-5"></i><p> 7 son sobrediagnosticadas por la mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-1"></i><p> 239 tienen falsas alarmas</p>
          </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">14 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 2 mueren de cáncer de mama a pesar de la mamografía</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 12 mueren de otras causas</p>
        </div>
      </div>
    </div>
    <div class="sin-tamizaje">
      <p class="strong titulo-color-turquesa"><strong>Sin mamografía a lo largo de 10 años</strong></p>
      <img class="parlamento-imagen" src="img/4049-sin-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">985 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 14 tienen diagnóstico de cáncer de mama (por síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 11 sobreviven al cáncer de mama con o sin mamografía</p>
        </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">15 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 3 mueren de cáncer de mama</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 12 mueren de otras causas</p>
        </div>
      </div>
    </div>
  </div>
  <button class="accordion-1"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></button>
    <div class="panel">
  <p>Estos datos se basan en mujeres con riesgo promedio para cáncer de mama, que son la población blanco del rastreo poblacional. Esto excluye a mujeres con factores de riesgo mayores (que aumentan más de dos veces el riesgo relativo o RR) como antecedentes personales o familiares de cáncer de mama, ovario o peritoneal (en general 1 familiar de primer grado con cáncer de mama antes de los 50 años o múltiples familiares de primer grado confieren un RR mayor a 2), mutaciones de genes asociados al cáncer de mama -por ejemplo BCRA 1 y 2 (RR 10 a 32)-, antecedente de carcinoma ductal o lobar in situ (RR 4), que no hayan recibido radioterapia en el pecho antes de los 30 años (RR 7 a 17) o mujeres con mamas densas (RR 5). Algunas mujeres presentan factores de riesgo menores (que aumentan menos de dos veces el riesgo) de forma aislada, como nuliparidad o paridad luego de los 30 años (RR 1.2-1.7), menarca antes de los 12 años o menopausia luego de los 55 años (RR 1.2-1.3), haber recibido terapia de reemplazo hormonal combinada por más de 10 años (RR 1.5), un familiar de segundo grado con cáncer de mama (1.2-1.5) o un familiar de primer grado con cáncer de mama luego de los 50 años (1.5-2), obesidad en la post-menopausia (1.2-1.9), consumo de alcohol (dos tragos diarios, RR 1.2), fumar antes del primer embarazo (1.2-1.4) o sedentarismo (1.1-1.8). Si la mujer presenta varios de estos factores de riesgo menores combinados tiene un riesgo mayor de desarrollar cáncer de mama y puede ser que esta herramienta subestime su riesgo individual. Las estimaciones del sobrediagnóstico varían en un rango que oscila entre 1% y 50% dependiendo del tipo de cálculo utilizado, del tipo de estudios y de las poblaciones en las que se basan. Para estos gráficos, considerando el grupo etario, la duración del seguimiento y la frecuencia del tamizaje, nos basamos en los propuestos por Barratt (2005).
  </p>
  </div>
  <script type="text/javascript">
  var acc = document.getElementsByClassName("accordion-1");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
  /* Toggle between adding and removing the "active" class,
  to highlight the button that controls the panel */
  this.classList.toggle("active");

  /* Toggle between hiding and showing the active panel */
  var panel = this.nextElementSibling;
  if (panel.style.display === "block") {
    panel.style.display = "none";
  } else {
    panel.style.display = "block";
  }
});
}
  </script>
    <!-- <a  class="display-5" href="#"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></h6><span class="">Estos datos se basan en mujeres con riesgo promedio para cáncer de mama, que son la población blanco del rastreo poblacional. Esto excluye a mujeres con factores de riesgo mayores (que aumentan más de dos veces el riesgo relativo o RR) como antecedentes personales o familiares de cáncer de mama, ovario o peritoneal (en general 1 familiar de primer grado con cáncer de mama antes de los 50 años o múltiples familiares de primer grado confieren un RR mayor a 2), mutaciones de genes asociados al cáncer de mama -por ejemplo BCRA 1 y 2 (RR 10 a 32)-, antecedente de carcinoma ductal o lobar in situ (RR 4), que no hayan recibido radioterapia en el pecho antes de los 30 años (RR 7 a 17) o mujeres con mamas densas (RR 5). Algunas mujeres presentan factores de riesgo menores (que aumentan menos de dos veces el riesgo) de forma aislada, como nuliparidad o paridad luego de los 30 años (RR 1.2-1.7), menarca antes de los 12 años o menopausia luego de los 55 años (RR 1.2-1.3), haber recibido terapia de reemplazo hormonal combinada por más de 10 años (RR 1.5), un familiar de segundo grado con cáncer de mama (1.2-1.5) o un familiar de primer grado con cáncer de mama luego de los 50 años (1.5-2), obesidad en la post-menopausia (1.2-1.9), consumo de alcohol (dos tragos diarios, RR 1.2), fumar antes del primer embarazo (1.2-1.4) o sedentarismo (1.1-1.8). Si la mujer presenta varios de estos factores de riesgo menores combinados tiene un riesgo mayor de desarrollar cáncer de mama y puede ser que esta herramienta subestime su riesgo individual. Las estimaciones del sobrediagnóstico varían en un rango que oscila entre 1% y 50% dependiendo del tipo de cálculo utilizado, del tipo de estudios y de las poblaciones en las que se basan. Para estos gráficos, considerando el grupo etario, la duración del seguimiento y la frecuencia del tamizaje, nos basamos en los propuestos por Barratt (2005).
<!-- </span></a>  -->
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
<img src="img/grafico50-69-nuevo.svg" alt="" class="grafico50-69">
<div class="col text-center">
  <button class="btn btn-danger" onclick="plusDivs(+1)">Siguiente</button><br>
  <!-- <button class="btn btn-primary" onclick="plusDivs(-1)">Anterior</button> -->
</div>
</div>
<div class="mySlides">
  <h3 class="tab-h3">¿Cuánto representan 1000 mujeres de 50 a 69 años?</h3>
  <p class="strong subtitulo-teatro">Imaginemos la platea del Teatro Coliseo o el Mercedes Sosa llena:</p>
  <div class="container">
    <div class="con-tamizaje">
      <p class="strong titulo-color-naranja"><strong>Con mamografía cada 2 años a lo largo de 20 años</strong></p>
      <img class="parlamento-imagen" src="img/5069-con-tamizaje.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">885 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 73 tienen diagnóstico de cáncer de mama (por mamografía o síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 42 sobreviven al cáncer de mama con o sin mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-4"></i><p> 4 evitan morirse de cáncer de mama gracias a la mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-5"></i><p> 19 son sobrediagnosticadas por la mamografía</p>
          </div>
          <div class="panel-item">
            <i class="fas fa-circle circle-1"></i><p> 412 tienen falsas alarmas</p>
          </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">115 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 8 mueren de cáncer de mama a pesar de la mamografía</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 107 mueren de otras causas</p>
        </div>
      </div>
    </div>
    <div class="sin-tamizaje">
      <p class="strong titulo-color-turquesa"><strong>Sin mamografía a lo largo de 20 años</strong></p>
      <img class="parlamento-imagen" src="img/5069-sin-tamizage.png" alt="">
      <div class="panel-1">
        <h4 class="panel-title">881 Sobreviven, de las cuales:</h4>
        <p class="strong panel-subtitle"><strong> 54 tienen diagnóstico de cáncer de mama (por síntomas):</strong></p>
        <div class="panel-item">
          <i class="fas fa-circle circle-3"></i><p> 42 sobreviven al cáncer de mama con o sin mamografía</p>
        </div>
      </div>
      <div class="panel-2">
        <h4 class="panel-title">119 Mueren, de las cuales: </h4>
        <div class="panel-item panel-subtitle">
          <i class="fas fa-circle circle-6"></i><p> 12 mueren de cáncer de mama</p>
        </div>
        <div class="panel-item">
          <i class="fas fa-circle circle-7"></i><p> 107 mueren de otras causas</p>
        </div>
      </div>
    </div>
  </div>
  <button class="accordion-2"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></button>
    <div class="panel">
  <p>Estos datos se basan en mujeres con riesgo promedio para cáncer de mama, que son la población blanco del rastreo poblacional. Esto excluye a mujeres con factores de riesgo mayores (que aumentan más de dos veces el riesgo relativo o RR) como antecedentes personales o familiares de cáncer de mama, ovario o peritoneal (en general 1 familiar de primer grado con cáncer de mama antes de los 50 años o múltiples familiares de primer grado confieren un RR mayor a 2), mutaciones de genes asociados al cáncer de mama -por ejemplo BCRA 1 y 2 (RR 10 a 32)-, antecedente de carcinoma ductal o lobar in situ (RR 4), que no hayan recibido radioterapia en el pecho antes de los 30 años (RR 7 a 17) o mujeres con mamas densas (RR 5). Algunas mujeres presentan factores de riesgo menores (que aumentan menos de dos veces el riesgo) de forma aislada, como nuliparidad o paridad luego de los 30 años (RR 1.2-1.7), menarca antes de los 12 años o menopausia luego de los 55 años (RR 1.2-1.3), haber recibido terapia de reemplazo hormonal combinada por más de 10 años (RR 1.5), un familiar de segundo grado con cáncer de mama (1.2-1.5) o un familiar de primer grado con cáncer de mama luego de los 50 años (1.5-2), obesidad en la post-menopausia (1.2-1.9), consumo de alcohol (dos tragos diarios, RR 1.2), fumar antes del primer embarazo (1.2-1.4) o sedentarismo (1.1-1.8). Si la mujer presenta varios de estos factores de riesgo menores combinados tiene un riesgo mayor de desarrollar cáncer de mama y puede ser que esta herramienta subestime su riesgo individual. Las estimaciones del sobrediagnóstico varían en un rango que oscila entre 1% y 50% dependiendo del tipo de cálculo utilizado, del tipo de estudios y de las poblaciones en las que se basan. Para estos gráficos, considerando el grupo etario, la duración del seguimiento y la frecuencia del tamizaje, nos basamos en los propuestos por Barratt (2005).
  </p>
  </div>
  <script type="text/javascript">
  var acc = document.getElementsByClassName("accordion-2");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
  /* Toggle between adding and removing the "active" class,
  to highlight the button that controls the panel */
  this.classList.toggle("active");

  /* Toggle between hiding and showing the active panel */
  var panel = this.nextElementSibling;
  if (panel.style.display === "block") {
    panel.style.display = "none";
  } else {
    panel.style.display = "block";
  }
});
}
  </script>
  <!-- <a  class="display-5" href="#"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></h6><span class="">Estos datos se basan en mujeres con riesgo promedio para cáncer de mama, que son la población blanco del rastreo poblacional. Esto excluye a mujeres con factores de riesgo mayores (que aumentan más de dos veces el riesgo relativo o RR) como antecedentes personales o familiares de cáncer de mama, ovario o peritoneal (en general 1 familiar de primer grado con cáncer de mama antes de los 50 años o múltiples familiares de primer grado confieren un RR mayor a 2), mutaciones de genes asociados al cáncer de mama -por ejemplo BCRA 1 y 2 (RR 10 a 32)-, antecedente de carcinoma ductal o lobar in situ (RR 4), que no hayan recibido radioterapia en el pecho antes de los 30 años (RR 7 a 17) o mujeres con mamas densas (RR 5). Algunas mujeres presentan factores de riesgo menores (que aumentan menos de dos veces el riesgo) de forma aislada, como nuliparidad o paridad luego de los 30 años (RR 1.2-1.7), menarca antes de los 12 años o menopausia luego de los 55 años (RR 1.2-1.3), haber recibido terapia de reemplazo hormonal combinada por más de 10 años (RR 1.5), un familiar de segundo grado con cáncer de mama (1.2-1.5) o un familiar de primer grado con cáncer de mama luego de los 50 años (1.5-2), obesidad en la post-menopausia (1.2-1.9), consumo de alcohol (dos tragos diarios, RR 1.2), fumar antes del primer embarazo (1.2-1.4) o sedentarismo (1.1-1.8). Si la mujer presenta varios de estos factores de riesgo menores combinados tiene un riesgo mayor de desarrollar cáncer de mama y puede ser que esta herramienta subestime su riesgo individual. Las estimaciones del sobrediagnóstico varían en un rango que oscila entre 1% y 50% dependiendo del tipo de cálculo utilizado, del tipo de estudios y de las poblaciones en las que se basan. Para estos gráficos, considerando el grupo etario, la duración del seguimiento y la frecuencia del tamizaje, nos basamos en los propuestos por Barratt (2005).
  <!-- </span></a> -->
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
<p>Cuando la mamografía muestra un hallazgo que aumenta el nivel de sospecha y motiva a realizar más estudios hasta que finalmente se determina que se trata de una condición benigna. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Algunas mujeres expresan que estas falsas alarmas les generan ansiedad y miedo.</p>
<p><strong>Un diagnóstico de cáncer que no daña o “tumores inofensivos” (también llamado “sobrediagnóstico”):</strong></p>
<p>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por lo que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p>
<p>Fuentes de financiamiento: Esta herramienta fue realizada en el contexto de un proyecto de investigación financiado por una Beca del Consejo de Investigación del Hospital Italiano de Buenos Aires.</p>
<p>Conflictos de interés: Lo/as autores de esta herramienta declaran no tener conflictos de interés.</p>
<p>Año de publicación: 2020</p>
<p>Próxima actualización: 2023</p>
@endsection

<!-- CONTENIDO DE LA TAB7 - Ventajas y desventajas -->
@section("prevenir")
<h3 class="tab-h3"> Ventajas y desventajas</h3>
<div class="beneficios-riesgos">
  <div class="beneficios">
    <h2>Posibles ventajas</h2>
    <div class="beneficio" id="benef-2">
        <p class="benef"><i class="fas fa-thumbs-up"></i>Reduce las muertes por cáncer de mama </p>
      <p class="descripcion">Este es el objetivo de la detección precoz con mamografía al encontrar y tratar lesiones de forma temprana, aunque no evita el cáncer de mama.</p>
    </div>
    <div class="beneficio" id="benef-3">
      <p class="benef"><i class="fas fa-thumbs-up"></i>Acceder a tratamientos menos invasivos</p>
      <p class="descripcion">Al detectar el cáncer de mama en estadíos tempranos se podría tratar con cirugías más simples o conservadoras y requerir menos quimioterapia.</p>
    </div>
    <div class="beneficio">
      <p class="benef"><i class="fas fa-thumbs-up"></i>Sensación de seguridad</p>
      <p class="descripcion">Algunas mujeres sienten tranquilidad y satisfacción al recibir una mamografía con un resultado normal.</p>
    </div>
  </div>
  <div class="riesgos">
    <h2>Posibles desventajas</h2>
    <div class="riesgo">
      <p class="risk"><i class="fas fa-thumbs-down"></i>No detecta todos los cánceres</p>
      <p class="descripcion">Algunos tumores crecen muy rápido y podrían aparecer inclusive entre los controles regulares con mamografías previas normales.</p>
    </div>
    <!-- <div class="riesgo">
      <a  class="display-3" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">falsas alarmas</strong><i class="fas fa-info-circle"></i></p><span class="">Cuando la mamografía muestra un hallazgo que aumenta el nivel de sospecha y motiva a realizar más estudios hasta que finalmente se determina que se trata de una condición benigna. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama).</span></a>
      <p class="descripcion">Algunas mujeres necesitan repetir estudios por lesiones benignas que no quedan claras. Durante este proceso algunas mujeres experimentan preocupación, temor o angustia.</p>
    </div> -->
    <div class="riesgo">
      <button class="accordion-3"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">falsas alarmas</strong><i class="fas fa-info-circle"></i></p></button>
        <div class="panel">
      <p>Cuando la mamografía muestra un hallazgo que aumenta el nivel de sospecha y motiva a realizar más estudios hasta que finalmente se determina que se trata de una condición benigna. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama).</p>
      </div>
      <p class="descripcion">Algunas mujeres necesitan repetir estudios por lesiones benignas que no quedan claras. Durante este proceso algunas mujeres experimentan preocupación, temor o angustia.</p>
    </div>
    <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion-3");
  var i;

  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
  }
    </script>
    <!-- <div class="riesgo">
      <a class="display-4" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">tratamientos innecesarios</strong><i class="fas fa-info-circle"></i></p><span class="">Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por lo que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</span></a>
      <p class="descripcion">El tamizaje encuentra algunos cánceres de mama que no hubieran producido síntomas o daño durante la vida de las mujeres. Esto conlleva cirugías, radioterapia y quimioterapia innecesarias. Es lo que llamamos “sobrediagnóstico” y “sobretratamiento".</p>
    </div> -->
    <div class="riesgo">
      <button class="accordion-4"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">tratamientos innecesarios</strong><i class="fas fa-info-circle"></i></p></button>
        <div class="panel">
      <p>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por lo que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p>
      </div>
      <p class="descripcion">La mamografía encuentra algunos cánceres de mama que no hubieran producido síntomas o daño durante la vida de las mujeres. Esto conlleva cirugías, radioterapia y quimioterapia innecesarias. Es lo que llamamos “sobrediagnóstico” y “sobretratamiento"</p>
    </div>
    <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion-4");
  var i;

  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
  }
    </script>
  </div>
</div>
<div class="tab2-alert-container">
  <div class="alert alert-primary tab2-alerta">
<p>La exposición a la radiación es una preocupación de muchas mujeres, aunque ésta es muy baja comparada con otros estudios o con la que confiere el medioambiente:
<br>-Hacerse 1 mamografía cada 2 años durante 20 años equivale a hacerse 3 radiografías de columna o 2 tomografías de cerebro.
<br>-Hacerse 1 mamografía equivale aproximadamente a 7 semanas de exposición a la radiación del medioambiente.
</p>
</div>
</div>
<!-- <p>Como comentamos antes, la mamografía ayuda a detectar precozmente cánceres de mama pero no previene la aparición de la enfermedad.</p>
<p>Hay diferentes factores que influyen en el riesgo de tener cáncer de mama. Algunos son modificables y se relacionan con el estilo de vida. ¿Qué impacto tienen estos factores?</p>
<div class="tab7-h6">
  <h6 class="h6-habitos">Hábitos que aumentan el riesgo:</h6>
</div>
  <div class="tab1">
    <div class="tab1-cuadro tab7-cuadro"><p class="tab7-cuadro-titulo">OBESIDAD EN LA POST-MENOPAUSIA</p>
      <div class="tab7-cuadro-contenido">
        <img src="img/bathroom-scale.png" alt="" class="tab7-img">
        <div class="tab7-cuadro-contenido-texto">
          <p>Se asocia a:<br><br><span class="tab7-porcentaje">8,4%⬆</span><br><br>del total de cánceres de mama (1800 casos anuales)</p>
        </div>
      </div>
    </div>
    <div class="tab1-cuadro tab7-cuadro"><p class="tab7-cuadro-titulo">CONSUMO EXCESIVO DE ALCOCHOL</p>
      <div class="tab7-cuadro-contenido">
        <img src="img/wine-bottle-128.png" alt="" class="tab7-img">
        <div class="tab7-cuadro-contenido-texto">
          <p>Se asocia a:<br><br><span class="tab7-porcentaje">8,6%⬆</span><br><br>del total de cánceres de mama (1750 casos anuales)</p>
        </div>
      </div>
    </div>
    <div class="tab1-cuadro tab7-cuadro"><p class="tab7-cuadro-titulo-tabaco">CONSUMO DE TABACO</p>
      <div class="tab7-cuadro-contenido">
        <img src="img/cigarette-128.png" alt="" class="tab7-img">
        <div class="tab7-cuadro-contenido-texto">
          <p>Se asocia a:<br><br><span class="tab7-porcentaje">35-40%⬆</span><br><br>mayor riesgo de <br>tener cáncer de mama</p>
        </div>
      </div>
    </div>
  </div>
  <div class="tab7-h6">
    <h6 class="h6-habitos">Hábitos que disminuyen el riesgo:</h6>
  </div>
  <div class="tab1">
    <div class="tab1-cuadro tab7-cuadro habito-disminuye"><p class="tab7-cuadro-titulo-actividad">ACTIVIDAD FÍSICA REGULAR</p>
      <div class="tab7-cuadro-contenido contenido-habito-disminuye">
        <img src="img/bicycle.png" alt="" class="tab7-img">
        <div class="tab7-cuadro-contenido-texto">
          <p>Se asocia a:<br><br><span class="tab7-porcentaje porcentaje-menor">12-31%⬇</span><br><br>menor riesgo de <br>tener cáncer de mama</p>
        </div>
      </div>
    </div>
    <div class="tab1-cuadro tab7-cuadro habito-disminuye"><p class="tab7-cuadro-titulo-lactancia">LACTANCIA MATERNA</p>
      <div class="tab7-cuadro-contenido contenido-habito-disminuye">
        <img src="img/breastfeeding.png" alt="" class="tab7-img">
        <div class="tab7-cuadro-contenido-texto">
          <p>Se asocia a:<br><br><span class="tab7-porcentaje porcentaje-menor">4,3%⬇</span><br><br>menor riesgo de <br>tener cáncer de mama</p>
        </div>
      </div>
    </div>
  </div>
  <button class="accordion"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></button>
    <div class="panel">
  <p>En Argentina en 2018 según las estimaciones de la Agencia Internacional de Investigación sobre Cáncer (IARC) hubieron 125014 casos nuevos de cáncer, de los cuales 21558 son de mama. En el 2017 se registraron 6049 defunciones por cáncer de mama. En nuestra región se le atribuye al factor obesidad el 6,8% de todos los casos de cáncer. Globalmente se le atribuye al factor obesidad (sobretodo en la postmenopausia) el 8.4% de los casos de cáncer de mama, al factor del consumo excesivo de alcohol (más de dos tragos diarios) el 3.5% y el 8.1% de los casos de cáncer total y de mama respectivamente y el 7.3% de las muertes por cáncer de mama. En mujeres que fumaron al menos 5 años antes de tener su primer hijo y más de 20 paquetes por año tuvieron un riesgo de 35 a 40% mayor de cáncer de mama comparado con mujeres no fumadoras. Se observó una disminución del 4.3% del riesgo de cáncer de mama en mujeres que amamantaron por un año. Un meta-análisis demostró que las mujeres que realizaron más actividad física tuvieron menor riesgo que las que no, desde un 12% en general hasta un 31% en un subgrupo de mujeres que realizaban 5hs de actividad vigorosa semanal y que no habían recibido terapia de reemplazo hormonal.</p>
  </div>
  <script type="text/javascript">
  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
  /* Toggle between adding and removing the "active" class,
  to highlight the button that controls the panel */
  this.classList.toggle("active");

  /* Toggle between hiding and showing the active panel */
  var panel = this.nextElementSibling;
  if (panel.style.display === "block") {
    panel.style.display = "none";
  } else {
    panel.style.display = "block";
  }
});
}
  </script> -->

  <!-- <a  class="display-5" href="#"><h6 class="">Más información sobre estos datos<i class="fas fa-info-circle"></i></h6><span class="">En Argentina en 2018 según las estimaciones de la Agencia Internacional de Investigación sobre Cáncer (IARC) hubieron 125014 casos nuevos de cáncer, de los cuales 21558 son de mama. En el 2017 se registraron 6049 defunciones por cáncer de mama. En nuestra región se le atribuye al factor obesidad el 6,8% de todos los casos de cáncer. Globalmente se le atribuye al factor obesidad (sobretodo en la postmenopausia) el 8.4% de los casos de cáncer de mama, al factor del consumo excesivo de alcohol (más de dos tragos diarios) el 3.5% y el 8.1% de los casos de cáncer total y de mama respectivamente y el 7.3% de las muertes por cáncer de mama. En mujeres que fumaron al menos 5 años antes de tener su primer hijo y más de 20 paquetes por año tuvieron un riesgo de 35 a 40% mayor de cáncer de mama comparado con mujeres no fumadoras. Se observó una disminución del 4.3% del riesgo de cáncer de mama en mujeres que amamantaron por un año. Un meta-análisis demostró que las mujeres que realizaron más actividad física tuvieron menor riesgo que las que no, desde un 12% en general hasta un 31% en un subgrupo de mujeres que realizaban 5hs de actividad vigorosa semanal y que no habían recibido terapia de reemplazo hormonal.
<!-- </span></a> -->
<!-- <div class="spacer">

</div> -->
  @endsection

  <!-- CONTENIDO DE LA TAB8 - Referencias -->
  @section("referencias")
  <h3 class="tab-h3">Referencias</h3>
  <p>Barratt A, Howard K, Irwig L, Salkeld G, Houssami N. Model of outcomes of screening mammography: information to support informed choices. British Medical Journal. 2005; 330: 936.</p>
  <p>Brown, K.F., Rumgay, H., Dunlop, C. et al. The fraction of cancer attributable to modifiable risk factors in England, Wales, Scotland, Northern Ireland, and the United Kingdom in 2015. Br J Cancer 118, 1130–1141 (2018) doi:10.1038/s41416-018-0029-6</p>
  <p>Collaborative Group on Hormonal Factors in Breast Cancer. Breast cancer and breastfeeding: collaborative reanalysis of individual data from 47 epidemiological studies in 30 countries, including 50302 women with breast cancer and 96973 women without the disease. Lancet. 2002;360(9328):187.</p>
  <p>Programa Nacional de Consensos Inter-Sociedades. Programa Argentino de Consensos de Enfermedades Oncológicas. Alto Riesgo para Cáncer de Mama Consenso Nacional Inter-Sociedades. Oct 2014. Disponible en: <a href="http://www.sag.org.ar/CAR.pdf" target="_blank">Programa Nacional de Consensos Inter-Sociedades Programa Argentino de Consensos de Enfermedades Oncológicas</a></p>
  <p>Di Sibio, AJ. Efectividad del tamizaje mamográfico en la reducción de la mortalidad por cáncer de mama. 1a ed. Ciudad Autónoma de Buenos Aires : Instituto Nacional del Cáncer; 2018. Disponible en: <a href="http://www.msal.gob.ar/images/stories/bes/graficos/0000001138cnt-20180321-efectividad-tamizaje-mamografico-mortalidaden-cm.pdf" target="_blank">Efectividad del tamizaje mamográfico en la reducción de la mortalidad por cáncer de mama</a></p>
  <p>Gram IT, Park SY, Kolonel LN, Maskarinec G, Wilkens LR, Henderson BE, Le Marchand L. Smoking and Risk of Breast Cancer in a Racially/Ethnically Diverse Population of Mainly Women Who Do Not Drink Alcohol: The MEC Study. Am J Epidemiol. 2015 Dec;182(11):917-25. Epub 2015 Oct 22.</p>
  <p>Independent UK Panel on Breast Cancer Screening. The benefits and harms of breast cancer screening:an independent review. Lancet. 2012; 380: 1778</p>
  <p>Pizot C, Boniol M, Mullie P, Koechlin A, Boniol M, Boyle P, Autier P. Physical activity, hormone replacement therapy and breast cancer risk: A meta-analysis of prospective studies. Eur J Cancer. 2016 Jan;52:138-54. Epub 2015 Dec 11</p>
  <p>Public Health Agency Of Canada. Information on Mammography for Women Aged 40 and Older : A Decision Aid for Breast Cancer Screening in Canada. 2009. 1–32 p.</p>
  <p>Shield, K. D., Soerjomataram, I., & Rehm, J. (2016). Alcohol Use and Breast Cancer: A Critical Review. Alcoholism, Clinical and Experimental Research, 40(6), 1166-1181. PMID:27130687</p>
  <p>Warner E. Clinical Practice Breast Cancer Screening. N Engl J Med 2011; 365:1025-1032</p>
  <a href="https://www.argentina.gob.ar/salud/instituto-nacional-del-cancer/estadisticas/incidencia" target="_blank">Estadísticas - Incidencia</a><br>
  <a href="https://www.argentina.gob.ar/salud/instituto-nacional-del-cancer/estadisticas/mortalidad" target="_blank">Estadísticas - Mortalidad</a>
  @endsection
