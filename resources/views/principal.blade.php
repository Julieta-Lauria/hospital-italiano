@extends("plantilla-2")

@section("grafico-2")
<div class="container-grafico2">
  <div class="container-grafico2-superior">
      <h1>TERAPIA DE REEMPLAZO HORMONAL (TRH) - RIESGOS Y BENEFICIOS</h1>
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
