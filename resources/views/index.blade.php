@extends("plantilla-1")

@section("titulo")
  Inicio
@endsection

@section("principal")
<div class="container">
  <div class="jumbotron">
    <div class="jumbotron-header-questions">
      <div class="jumbotron-header">
        <img src="img/vector.png" alt="">
      </div>
      <div class="jumbotron-questions">
        <h1>DETECCIÓN PRECOZ DEL <span>CÁNCER DE MAMA</span></h1>
        <h2>Ayudándote a decidir:</h2>
        <p>¿Cuáles son mis opciones?</p>
        <p>¿Cuáles son los posibles beneficios y desventajas de esas opciones?</p>
        <p>¿Con qué frecuencia se presentan los posibles beneficios y desventajas de cada una de ellas?</p>
        <form class="" action="" method="get">
          <div>
            <a href="{{ url('/principal')}}" class="button" ><button type="button" name="send">INGRESAR</button></a>

          </div>
        </form>
      </div>
    </div>


  </div>

</div>
@endsection("principal")
