<section class="comentarios-medico">
  <p class="btn-comment tab-h3">Comentarios del Médico</p>
  <textarea id="comment" name="comment" class="comment" placeholder="Escriba sus comentarios..">He utilizado una herramienta que ayuda a compartir decisiones con la paciente acerca de la participación en el tamizaje de cáncer de mama. Hemos discutido las ventajas y desventajas del mismo y lo que la paciente valora como más importante para ella. Después de considerar las circunstancias únicas de la paciente y los pros y los contras de las alternativas, hemos decidido ...</textarea>
</section>

<input id="form_html" name="form_html" type="hidden">


<section class="section">
  <input name="enviar" type="submit" value='Generar Reporte' id="enviar" class="boton-reporte">
</section>




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
