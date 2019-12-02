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
      <a href="{{ url('/principal')}}"><button type="button" name="send" class="btn btn-danger">ENTENDIDO</button></a>
      <!-- <button class="btn btn-danger" onclick="plusDivs1(+1)">INGRESAR</button> -->
    </div>
    <p class="asterisco">* riesgo de por vida menor a 15% o riesgo a 5 años menor a 1.66%, es decir, sin antecedentes personales o familiares de cáncer de mama, ovario o peritoneal, sin mutaciones de genes asociados al cáncer de mama (por ejemplo BCRA 1 y 2), sin antecedente de carcinoma ductal o lobar in situ, y que no hayan recibido radioterapia en el pecho. Para más información puede consultar: <a href="https://bcrisktool.cancer.gov/calculator.html" target="_blank">https://bcrisktool.cancer.gov/calculator.html</a></p>
  </div>
</div>

@endsection
