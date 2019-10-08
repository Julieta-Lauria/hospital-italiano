@extends("plantilla")

@section("titulo")
  Inicio
@endsection

@section("principal")
<div class="container">
  <div class="jumbotron">
    <div class="jumbotron-header-questions">
      <div class="jumbotron-header">
        <img src="img/pink-ribbon-48.png" alt="" class="ribbon">
        <img src="img/pink-ribbon-100.png" alt="" class="ribbon-100">
        <h1>Detección precoz del cáncer de mama</h1>
      </div>
      <div class="jumbotron-questions">
        <h2>Ayudándote a decidir:</h2>
        <p>¿Cuáles son mis opciones?</p>
        <p>¿Cuáles son los posibles beneficios y desventajas de esas opciones?</p>
        <p>¿Con qué frecuencia se presentan los posibles beneficios y desventajas de cada una de ellas?</p>
      </div>
    </div>
    <div class="button">
      <button type="submit" name="send">INGRESAR</button>
    </div>
  </div>

</div>
@endsection("principal")
