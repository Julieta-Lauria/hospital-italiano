@extends("plantilla-2")

@section("drag")

  @include('drag')

@endsection


@section("grafico-2")
<div class="container-grafico2">
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

  @section("grafico-1-version-1")
  <h2 class="grafico1-h2">¿Con qué frecuencia ocurren los beneficios y las desventajas en mujeres de 50 años o más que participan o no del tamizaje de cáncer de mama? </h2>
  <div class="titulos">
  <span>De cada 1000 mujeres que NO se realizan tamizaje a lo largo de 11 años:</span>
  <span>De cada 1000 mujeres que se realizan tamizaje a lo largo de 11 años:</span>
  </div>
  <div class="dosmil">
    <div class="mil" id="division">
      <div class="doscientos">
        <div class="cien">
          <div class="veinte">
            <i class="fas fa-female" style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
        </div>
        <div class="cien">
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
      </div>
    </div>
    <div class="doscientos">
      <div class="cien">
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
      </div>
      <div class="cien">
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
    </div>
  </div>
  <div class="doscientos">
    <div class="cien">
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
    </div>
    <div class="cien">
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
  </div>
  </div>
  <div class="doscientos">
  <div class="cien">
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
  </div>
  <div class="cien">
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
  </div>
  </div>
  <div class="doscientos">
  <div class="cien">
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  </div>
  <div class="cien">
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
  </div>
  </div>
  </div>
    </div>
    <div class="mil">
      <div class="doscientos">
        <div class="cien">
          <div class="veinte">
            <i class="fas fa-female" style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:#6b1111"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"style="color:red"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female" style="color:red"></i><i class="fas fa-female"style="color:red"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
        </div>
        <div class="cien">
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
          <div class="veinte">
            <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
          </div>
      </div>
    </div>
    <div class="doscientos">
      <div class="cien">
        <div class="veinte">
          <i class="fas fa-female" style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female" style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female" style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female" style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female" style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i><i class="fas fa-female"style="color:green"></i>
        </div>
      </div>
      <div class="cien">
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
        <div class="veinte">
          <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
        </div>
    </div>
    </div>
    <div class="doscientos">
    <div class="cien">
      <div class="veinte">
        <i class="fas fa-female" style="color:blue"></i><i class="fas fa-female" style="color:blue"></i><i class="fas fa-female" style="color:blue"></i><i class="fas fa-female" style="color:blue"></i><i class="fas fa-female" style="color:blue"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
    </div>
    <div class="cien">
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
      <div class="veinte">
        <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
      </div>
    </div>
    </div>
    <div class="doscientos">
    <div class="cien">
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    </div>
    <div class="cien">
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
      <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    </div>
    </div>
    <div class="doscientos">
    <div class="cien">
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    </div>
    <div class="cien">
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    <div class="veinte">
    <i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i><i class="fas fa-female"></i>
    </div>
    </div>
    </div>
    </div>
  </div>
  <div class="cifras">
  <div class="sin-tamizaje">
    <div class="comentario">
      <i id="icono-muertes" class="fas fa-female"></i><p>5 mueren por cáncer de mama</p>
    </div>
    <div class="comentario">
    <i id="icono-otras-muertes" class="fas fa-female"></i><p>22 mueren por cualquier tipo de cáncer</p>
  </div>
</div>
  <div class="con-tamizaje">
    <div class="comentario">
      <i id="icono-muertes" class="fas fa-female"></i><p>4 mueren por cáncer de mama</p>
    </div>
    <div class="comentario">
    <i id="icono-otras-muertes" class="fas fa-female"></i><p>22 mueren por cualquier tipo de cáncer</p>
    </div>
    <div class="comentario">
    <i id="icono-falsa-alarma" class="fas fa-female"></i><p>100 tienen falsas alarmas</p>
    </div>
    <div class="comentario">
    <i id="icono-sobrediagnostico" class="fas fa-female"></i><p id="p-sobrediagnostico">5 se les diagnostica y trata un cáncer de mama que no hubiera producido daño durante su vida (sobrediagnóstico).</p>
    </div>
  </div>
  </div>
  <div class="conclusion">
    <p><strong>Conclusión:</strong> 1 de cada 1000 mujeres sobrevive gracias a haberse realizado la mamografia</p>
  </div>

@endsection

@section("grafico1-version2")
<img class="grafico1-version2" src="img/grafico1-version2.svg" alt="">
@endsection
