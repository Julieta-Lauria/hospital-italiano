@extends("plantilla-1")

@section("titulo")
  Inicio
@endsection

@section("principal")
<div class="container">
  <div class="jumbotron">
    <div class="jumbotron-header-questions">
      <div class="jumbotron-header">
        <img src="img/ribbon-50.png" alt="" class="ribbon">
        <img src="img/ribbon-100.png" alt="" class="ribbon-100">
        <h1>Detección precoz del cáncer de mama</h1>
      </div>
      <div class="jumbotron-questions">
        <h2>Ayudándote a decidir:</h2>
        <p>¿Cuáles son mis opciones?</p>
        <p>¿Cuáles son los posibles beneficios y desventajas de esas opciones?</p>
        <p>¿Con qué frecuencia se presentan los posibles beneficios y desventajas de cada una de ellas?</p>
      </div>
    </div>

    <form class="" action="" method="get">
      <div>
        <a href="{{ url('/principal')}}" class="button" ><button type="button" name="send">INGRESAR</button></a>

      </div>
    </form>
    
  </div>

</div>
@endsection("principal")
