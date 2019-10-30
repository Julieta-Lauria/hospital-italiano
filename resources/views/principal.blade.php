@extends("plantilla-2")

@section("drag")

  @include('drag')

@endsection


@section("diagram")

<img class="grafico1-version2" src="img/grafico1-version2.svg" height="480px" alt="">
<a class="display-1" href="#"><i class="fas fa-info-circle"></i><span class="">Cuando la mamografía muestra una anomalía que podría ser cáncer, hay que hacer otros estudios para aclarar. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la anomalía era benigna, decimos que fue una falsa alarma.</span></a>
<a class="display-2" href="#"><i class="fas fa-info-circle"></i><span class="">Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</span></a>
@endsection

@section("grafico-2")
<!-- <div class="container-grafico2">
  <div class="container-grafico2-superior">
      <h1>Terapia de reemplazo hormonal (TRH) <br> Riesgos y Beneficios</h1>
      <h3>La TRH es un efectivo tratamiento de corto plazo para los síntomas de la menopausia, que tiene tanto beneficios como riesgos</h3>
      <div class="beneficios-riesgos">
        <div class="riesgos">
          <h2>LOS RIESGOS</h2>
          <div class="riesgo">
            <i class="fas fa-pills"></i>
            <p>La TRH aumenta el riesgo de cáncer de mama y de ovarios. Estos riesgos disminuyen cuando la mujer deja de realizar la TRH.</p>
          </div>
          <div class="riesgo">
            <i class="fas fa-pills"></i>
            <p> La TRH también puede afectar el riesgo de tener cáncer de útero, pero esto depende de diversos factores, incluido el tipo de TRH</p>
          </div>
          <div class="riesgo">
            <i class="fas fa-pills"></i>
            <p>También puede aumentar el riesgo de enfermedades cardíacas e infartos</p>
          </div>
        </div>
        <div class="beneficios">
          <h2>LOS BENEFICIOS</h2>
          <div class="beneficio">
            <i class="fas fa-star"></i>
            <p>La TRH reduce los síntomas de la menopausia</p>
          </div>
          <div class="beneficio">
            <i class="fas fa-star"></i>
            <p>También puede mejorar significativamente la calidad de vida de la mujer</p>
          </div>
          <div class="beneficio">
            <i class="fas fa-star"></i>
            <p>Puede levemente disminuir el riesgo de cáncer intestinal y otras enfermedades</p>
          </div>
        </div>
      </div>
      <div class="pregunta">
        <i class="far fa-question-circle"></i>
        <p>Si tenes alguna pregunta o preocupación sobre realizar TRH, debes consultarlo con tu médico</p>
      </div>
  </div>
  <div class="container-grafico2-inferior">
    <h2>¿CON QUÉ SE PUEDE COMPARAR?</h2>
    <h3>El aumento en el riesgo de tener cáncer es pequeño comparado con otros de riesgo de la vida cotidiana, por ejemplo...</h3>
    <div class="comparaciones">
      <div class="iconos">
        <i class="fas fa-pills" id="pills"></i>
        <i class="fas fa-weight"></i>
        <i class="fas fa-smoking-ban"></i>
      </div>
      <div class="comparaciones-textos">
        <p class="comparacion1">Minimizar la TRH podría prevenir <strong>1.400 casos de cáncer </strong>al año</p>
        <p class="comparacion2">Mantener un peso saludable podría prevenir <strong>13.200 casos de cáncer </strong>al año</p>
        <p class="comparacion3">No fumar podría prevenir <strong>22.000 casos de cáncer </strong>al año</p>
      </div>
        </div>
    </div>
    <p class="fuente">Fuente: Brown et al, British Journal of cancer, 2018.</p>
  </div>
  @endsection
