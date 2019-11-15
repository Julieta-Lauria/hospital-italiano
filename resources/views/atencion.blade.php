@extends("plantilla-1")

@section("titulo")
  Inicio
@endsection

@section("principal")
<div class="alert-container">
  <div class="alert alert-primary alerta">
    <h3 class="tab-h3">Atención:</h3>
    <!-- <p>Si pensás que hablar de los riesgos o desventajas de una intervención te puede generar ansiedad (por ejemplo leer el prospecto de los medicamentos) te recomendamos que no utilices esta herramienta.</p> -->
    <p>Esta herramienta fue diseñada para ser utilizada durante la consulta con un profesional del equipo de salud y con pacientes con riesgo promedio* para cáncer de mama. </p>

    <div class="col text-center">
      <a href="{{ url('/principal')}}"><button type="button" name="send" class="btn btn-danger">INGRESAR</button></a>
      <!-- <button class="btn btn-danger" onclick="plusDivs1(+1)">INGRESAR</button> -->
    </div>
    <p>* sin antecedentes personales o familiares de cáncer de mama, ovario o peritoneal, sin riesgo genético y que no hayan recibido radioterapia en el pecho. Para más información puede consultar: <a href="https://bcrisktool.cancer.gov/calculator.html" target="_blank">https://bcrisktool.cancer.gov/calculator.html</a></p>
  </div>
</div>

@endsection
