<?php
$agent = new \Jenssegers\Agent\Agent;
$result = $agent->isMobile();
//dd($result);
?>

<!--content inner-->
<div class="content__inner">
  <div class="container overflow-hidden">
    <!--multisteps-form-->
    <div class="multisteps-form">
      <!--progress bar-->
      <div class="row">
        <div class="col-12 col-lg-11 ml-auto mr-auto mb-4">
          <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="Valores" id="barra_drag">Valores y Preferencias</button>
            <button class="multisteps-form__progress-btn" type="button" title="Datos" id="barra_datos">Datos</button>
            <!-- <button class="multisteps-form__progress-btn" type="button" title="Order Info">Comentarios</button> -->
            <button class="multisteps-form__progress-btn" type="button" title="Comentarios" id="barra_reporte">Comentarios</button>
          </div>
        </div>
      </div>
      <!--form panels-->

      <div class="row">
        <div class="col-12 col-lg-11 m-auto">
          <form class="multisteps-form__form" action="{{url('pdf')}}" name="form" id="form" method="post" onsubmit="myFunction()" enctype="multipart/form-data">
          @csrf

            <!--single form panel-->
            <section class="col-12">
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn" id="panel_drag">

                <h2 class="drag-h2">Lo más importante para vos: ¿Con cuál de estas afirmaciones te sentirías más identificada? </h2>
                <p>Ordene las siguientes frases si está de acuerdo, en desacuerdo o ni de acuerdo o desacuerdo con estas afirmaciones.</p>

                <div class="multisteps-form__content">


@if ($result == false)
<div class="drag-container" id="divform">
    <ul class="drag-list">

    <li class="drag-column drag-column-on-hold">
        <span class="drag-column-header">
          <h2 class="afirmaciones">Afirmaciones</h2>
        </span>
        <div class="drag-options" id="options1"></div>
        <ul class="drag-inner-list" id="1">
          <li class="drag-item"><input name="afirmacion1" value="0" hidden>Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>
          <li class="drag-item"><input name="afirmacion2" value="0" hidden>No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>
          <li class="drag-item"><input name="afirmacion3" value="0" hidden>La mamografía es muy molesta y la paso mal haciéndome el estudio</li>
          <li class="drag-item"><input name="afirmacion4" value="0" hidden>La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>
          <li class="drag-item"><input name="afirmacion5" value="0" hidden>La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>
          <li class="drag-item"><input name="afirmacion6" value="0" hidden>Me genera ansiedad o miedo esperar el resultado de la mamografía</li>
          <li class="drag-item"><input name="afirmacion7" value="0" hidden>Me genera ansiedad o miedo repetirme estudios</li>
          <li class="drag-item"><input name="afirmacion8" value="0" hidden>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>
          <li class="drag-item"><input name="afirmacion9" value="0" hidden>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>
          <li class="drag-item"><input name="afirmacion10" value="0" hidden>Prefiero que esta decisión la tome mi médico/a</li>
          <li class="drag-item"><input name="afirmacion11" value="0" hidden>Hacerme la mamografía me da tranquilidad</li>
        </ul>
      </li>


      <li class="drag-column drag-column-in-progress">
        <span class="drag-column-header">
          <h2>En Desacuerdo</h2>
        </span>
        <div class="drag-options" id="options2"></div>
        <ul class="drag-inner-list" id="2">
          <!-- <li class="drag-item"></li> -->
        </ul>
      </li>


      <li class="drag-column drag-column-needs-review">
        <span class="drag-column-header">
          <h2>Ni acuerdo, ni desacuerdo</h2>
        </span>
        <div class="drag-options" id="options3"></div>
        <ul class="drag-inner-list" id="3">
          <!-- <li class="drag-item"></li> -->
        </ul>
      </li>


      <li class="drag-column drag-column-approved">
        <span class="drag-column-header">
          <h2>De acuerdo</h2>
        </span>
        <div class="drag-options" id="options4"></div>
        <ul class="drag-inner-list" id="4">
          <!-- <li class="drag-item"></li> -->
        </ul>
      </li>
    </ul>

  </div>
 @elseif ($result == true)
 <div class="drag-container" id="divform">

 <li class="drag-item"><input name="afirmacion1" value="0" hidden>Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>
 <input type="radio" name="afirmacion1" value="2" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion1" value="3" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion1" value="4" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion2" value="0" hidden>No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>
 <input type="radio" name="afirmacion2" value="1" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion2" value="2" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion2" value="3" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion3" value="0" hidden>La mamografía es muy molesta y la paso mal haciéndome el estudio</li>
 <input type="radio" name="afirmacion3" value="2" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion3" value="3" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion3" value="4" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion4" value="0" hidden>La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>
 <input type="radio" name="afirmacion4" value="2" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion4" value="3" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion4" value="4" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion5" value="0" hidden>La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>
 <input type="radio" name="afirmacion5" value="2" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion5" value="3" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion5" value="4" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion6" value="0" hidden>Me genera ansiedad o miedo esperar el resultado de la mamografía</li>
 <input type="radio" name="afirmacion6" value="2" id="2"> En Desacuerdo<br>
 <input type="radio" name="afirmacion6" value="3" id="3"> Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion6" value="4" id="4"> De acuerdo<br>

 <li class="drag-item"><input name="afirmacion7" value="0" hidden>Me genera ansiedad o miedo repetirme estudios</li>
 <input type="radio" name="afirmacion7" value="2" id="2" > En Desacuerdo<br>
 <input type="radio" name="afirmacion7" value="3" id="3" > Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion7" value="4" id="4" > De acuerdo<br>

 <li class="drag-item"><input name="afirmacion8" value="0" hidden>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>
 <input type="radio" name="afirmacion8" value="2" id="2" > En Desacuerdo<br>
 <input type="radio" name="afirmacion8" value="3" id="3" > Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion8" value="4" id="4" > De acuerdo<br>

 <li class="drag-item"><input name="afirmacion9" value="0" hidden>La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>
 <input type="radio" name="afirmacion9" value="2" id="2" > En Desacuerdo<br>
 <input type="radio" name="afirmacion9" value="3" id="3" > Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion9" value="4" id="4" > De acuerdo<br>

 <li class="drag-item"><input name="afirmacion10" value="0" hidden>Prefiero que esta decisión la tome mi médico/a</li>
 <input type="radio" name="afirmacion10" value="2" id="2" > En Desacuerdo<br>
 <input type="radio" name="afirmacion10" value="3" id="3" > Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion10" value="4" id="4" > De acuerdo<br>

 <li class="drag-item"><input name="afirmacion11" value="0" hidden>Hacerme la mamografía me da tranquilidad</li>
 <input type="radio" name="afirmacion11" value="2" id="2" > En Desacuerdo<br>
 <input type="radio" name="afirmacion11" value="3" id="3" > Ni acuerdo, ni desacuerdo<br>
 <input type="radio" name="afirmacion11" value="4" id="4" > De acuerdo<br>

</div>


@endif




                  <div class="button-row d-flex mt-4">
                    <div class="col text-center">
                    <button class="btn btn-primary ml-auto js-btn-next btn-danger" type="button" title="Next" onclick="validatorJS()">Siguiente</button>
                  </div>
                  </div>

                </div>
              </div>

            </section>


            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn" id="panel_datos">
              <h3 class="multisteps-form__title"></h3>
              <div class="multisteps-form__content">
                <section class="col-12">
                  <!-- partial:index.partial.html -->
                  <section class="section drag-title">
                    <h3 class="multisteps-form__title tab-h3">Completá los siguientes datos:</h3>
                  </section>



<div class="form-row mt-4">
  <div class="col-12 col-sm-6">
    <select class="multisteps-form__input form-control" name="edad" id="edad" required>
      <option value="null">Edad de la paciente</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
      <option value="45">45</option>
      <option value="46">46</option>
      <option value="47">47</option>
      <option value="48">48</option>
      <option value="49">49</option>
      <option value="50">50</option>
      <option value="51">51</option>
      <option value="52">52</option>
      <option value="53">53</option>
      <option value="54">54</option>
      <option value="55">55</option>
      <option value="56">56</option>
      <option value="57">57</option>
      <option value="58">58</option>
      <option value="59">59</option>
      <option value="60">60</option>
      <option value="61">61</option>
      <option value="62">62</option>
      <option value="63">63</option>
      <option value="64">64</option>
      <option value="65">65</option>
      <option value="66">66</option>
      <option value="67">67</option>
      <option value="68">68</option>
      <option value="69">69</option>
      <option value="69">69</option>
      <option value="70">70</option>
      <option value="71">71</option>
      <option value="72">72</option>
      <option value="73">73</option>
      <option value="74">74</option>
      <option value="75">75</option>
    </select>
    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="First Name"/> -->
  </div>
  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
    <select class="multisteps-form__input form-control" name="medico" id="medico">
      <option value="null">Profesional de la salud</option>
      <optgroup label="Médico/a">
        <option value="Médico/a de familia/general">Médico/a de familia/general</option>
        <option value="Ginecólogo/a">Ginecólogo/a</option>
        <option value="Médico/a clínico/a">Médico/a clínico/a</option>
        <option value="Otro/a médico/a">Otro/a médico/a</option>
      </optgroup>
      <option value="Enfermero/a">Enfermero/a</option>
      <option value="Otro/a">Otro/a</option>
    </select>
    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Last Name"/> -->
  </div>
</div>
<div class="form-row mt-4">
  <div class="col-12 col-sm-6">
    <select class="multisteps-form__input form-control" name="ambito" id="ambito">
      <option value="null">Lugar de atención</option>
      <option value="Privado">Privado</option>
      <option value="Público">Público</option>
    </select>
    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Login"/> -->
  </div>
  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
    <select class="multisteps-form__input form-control" name="pais" id="pais" required>
      <option value="null">País</option>
      <option value="Argentina" id="AR">Argentina</option>
      <option value="Afganistán" id="AF">Afganistán</option>
      <option value="Albania" id="AL">Albania</option>
      <option value="Alemania" id="DE">Alemania</option>
      <option value="Andorra" id="AD">Andorra</option>
      <option value="Angola" id="AO">Angola</option>
      <option value="Anguila" id="AI">Anguila</option>
      <option value="Antártida" id="AQ">Antártida</option>
      <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
      <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
      <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
      <option value="Argelia" id="DZ">Argelia</option>
      <option value="Armenia" id="AM">Armenia</option>
      <option value="Aruba" id="AW">Aruba</option>
      <option value="Australia" id="AU">Australia</option>
      <option value="Austria" id="AT">Austria</option>
      <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
      <option value="Bahamas" id="BS">Bahamas</option>
      <option value="Bahrein" id="BH">Bahrein</option>
      <option value="Bangladesh" id="BD">Bangladesh</option>
      <option value="Barbados" id="BB">Barbados</option>
      <option value="Bélgica" id="BE">Bélgica</option>
      <option value="Belice" id="BZ">Belice</option>
      <option value="Benín" id="BJ">Benín</option>
      <option value="Bermudas" id="BM">Bermudas</option>
      <option value="Bhután" id="BT">Bhután</option>
      <option value="Bielorrusia" id="BY">Bielorrusia</option>
      <option value="Birmania" id="MM">Birmania</option>
      <option value="Bolivia" id="BO">Bolivia</option>
      <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
      <option value="Botsuana" id="BW">Botsuana</option>
      <option value="Brasil" id="BR">Brasil</option>
      <option value="Brunei" id="BN">Brunei</option>
      <option value="Bulgaria" id="BG">Bulgaria</option>
      <option value="Burkina Faso" id="BF">Burkina Faso</option>
      <option value="Burundi" id="BI">Burundi</option>
      <option value="Cabo Verde" id="CV">Cabo Verde</option>
      <option value="Camboya" id="KH">Camboya</option>
      <option value="Camerún" id="CM">Camerún</option>
      <option value="Canadá" id="CA">Canadá</option>
      <option value="Chad" id="TD">Chad</option>
      <option value="Chile" id="CL">Chile</option>
      <option value="China" id="CN">China</option>
      <option value="Chipre" id="CY">Chipre</option>
      <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
      <option value="Colombia" id="CO">Colombia</option>
      <option value="Comores" id="KM">Comores</option>
      <option value="Congo" id="CG">Congo</option>
      <option value="Corea" id="KR">Corea</option>
      <option value="Corea del Norte" id="KP">Corea del Norte</option>
      <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
      <option value="Costa Rica" id="CR">Costa Rica</option>
      <option value="Croacia" id="HR">Croacia</option>
      <option value="Cuba" id="CU">Cuba</option>
      <option value="Dinamarca" id="DK">Dinamarca</option>
      <option value="Djibouri" id="DJ">Djibouri</option>
      <option value="Dominica" id="DM">Dominica</option>
      <option value="Ecuador" id="EC">Ecuador</option>
      <option value="Egipto" id="EG">Egipto</option>
      <option value="El Salvador" id="SV">El Salvador</option>
      <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
      <option value="Eritrea" id="ER">Eritrea</option>
      <option value="Eslovaquia" id="SK">Eslovaquia</option>
      <option value="Eslovenia" id="SI">Eslovenia</option>
      <option value="España" id="ES">España</option>
      <option value="Estados Unidos" id="US">Estados Unidos</option>
      <option value="Estonia" id="EE">Estonia</option>
      <option value="c" id="ET">Etiopía</option>
      <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
      <option value="Filipinas" id="PH">Filipinas</option>
      <option value="Finlandia" id="FI">Finlandia</option>
      <option value="Francia" id="FR">Francia</option>
      <option value="Gabón" id="GA">Gabón</option>
      <option value="Gambia" id="GM">Gambia</option>
      <option value="Georgia" id="GE">Georgia</option>
      <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
      <option value="Ghana" id="GH">Ghana</option>
      <option value="Gibraltar" id="GI">Gibraltar</option>
      <option value="Granada" id="GD">Granada</option>
      <option value="Grecia" id="GR">Grecia</option>
      <option value="Groenlandia" id="GL">Groenlandia</option>
      <option value="Guadalupe" id="GP">Guadalupe</option>
      <option value="Guam" id="GU">Guam</option>
      <option value="Guatemala" id="GT">Guatemala</option>
      <option value="Guayana" id="GY">Guayana</option>
      <option value="Guayana francesa" id="GF">Guayana francesa</option>
      <option value="Guinea" id="GN">Guinea</option>
      <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
      <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
      <option value="Haití" id="HT">Haití</option>
      <option value="Holanda" id="NL">Holanda</option>
      <option value="Honduras" id="HN">Honduras</option>
      <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
      <option value="Hungría" id="HU">Hungría</option>
      <option value="India" id="IN">India</option>
      <option value="Indonesia" id="ID">Indonesia</option>
      <option value="Irak" id="IQ">Irak</option>
      <option value="Irán" id="IR">Irán</option>
      <option value="Irlanda" id="IE">Irlanda</option>
      <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
      <option value="Isla Christmas" id="CX">Isla Christmas</option>
      <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
      <option value="Islandia" id="IS">Islandia</option>
      <option value="Islas Caimán" id="KY">Islas Caimán</option>
      <option value="Islas Cook" id="CK">Islas Cook</option>
      <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
      <option value="Islas Faroe" id="FO">Islas Faroe</option>
      <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
      <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
      <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
      <option value="Islas Marshall" id="MH">Islas Marshall</option>
      <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
      <option value="Islas Palau" id="PW">Islas Palau</option>
      <option value="Islas Salomón" d="SB">Islas Salomón</option>
      <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
      <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
      <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
      <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
      <option value="Israel" id="IL">Israel</option>
      <option value="Italia" id="IT">Italia</option>
      <option value="Jamaica" id="JM">Jamaica</option>
      <option value="Japón" id="JP">Japón</option>
      <option value="Jordania" id="JO">Jordania</option>
      <option value="Kazajistán" id="KZ">Kazajistán</option>
      <option value="Kenia" id="KE">Kenia</option>
      <option value="Kirguizistán" id="KG">Kirguizistán</option>
      <option value="Kiribati" id="KI">Kiribati</option>
      <option value="Kuwait" id="KW">Kuwait</option>
      <option value="Laos" id="LA">Laos</option>
      <option value="Lesoto" id="LS">Lesoto</option>
      <option value="Letonia" id="LV">Letonia</option>
      <option value="Líbano" id="LB">Líbano</option>
      <option value="Liberia" id="LR">Liberia</option>
      <option value="Libia" id="LY">Libia</option>
      <option value="Liechtenstein" id="LI">Liechtenstein</option>
      <option value="Lituania" id="LT">Lituania</option>
      <option value="Luxemburgo" id="LU">Luxemburgo</option>
      <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
      <option value="Madagascar" id="MG">Madagascar</option>
      <option value="Malasia" id="MY">Malasia</option>
      <option value="Malawi" id="MW">Malawi</option>
      <option value="Maldivas" id="MV">Maldivas</option>
      <option value="Malí" id="ML">Malí</option>
      <option value="Malta" id="MT">Malta</option>
      <option value="Marruecos" id="MA">Marruecos</option>
      <option value="Martinica" id="MQ">Martinica</option>
      <option value="Mauricio" id="MU">Mauricio</option>
      <option value="Mauritania" id="MR">Mauritania</option>
      <option value="Mayotte" id="YT">Mayotte</option>
      <option value="México" id="MX">México</option>
      <option value="Micronesia" id="FM">Micronesia</option>
      <option value="Moldavia" id="MD">Moldavia</option>
      <option value="Mónaco" id="MC">Mónaco</option>
      <option value="Mongolia" id="MN">Mongolia</option>
      <option value="Montserrat" id="MS">Montserrat</option>
      <option value="Mozambique" id="MZ">Mozambique</option>
      <option value="Namibia" id="NA">Namibia</option>
      <option value="Nauru" id="NR">Nauru</option>
      <option value="Nepal" id="NP">Nepal</option>
      <option value="Nicaragua" id="NI">Nicaragua</option>
      <option value="Níger" id="NE">Níger</option>
      <option value="Nigeria" id="NG">Nigeria</option>
      <option value="Niue" id="NU">Niue</option>
      <option value="Norfolk" id="NF">Norfolk</option>
      <option value="Noruega" id="NO">Noruega</option>
      <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
      <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
      <option value="Omán" id="OM">Omán</option>
      <option value="Panamá" id="PA">Panamá</option>
      <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
      <option value="Paquistán" id="PK">Paquistán</option>
      <option value="Paraguay" id="PY">Paraguay</option>
      <option value="Perú" id="PE">Perú</option>
      <option value="Pitcairn" id="PN">Pitcairn</option>
      <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
      <option value="Polonia" id="PL">Polonia</option>
      <option value="Portugal" id="PT">Portugal</option>
      <option value="Puerto Rico" id="PR">Puerto Rico</option>
      <option value="Qatar" id="QA">Qatar</option>
      <option value="Reino Unido" id="UK">Reino Unido</option>
      <option value="República Centroafricana" id="CF">República Centroafricana</option>
      <option value="República Checa" id="CZ">República Checa</option>
      <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
      <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
      <option value="República Dominicana" id="DO">República Dominicana</option>
      <option value="Reunión" id="RE">Reunión</option>
      <option value="Ruanda" id="RW">Ruanda</option>
      <option value="Rumania" id="RO">Rumania</option>
      <option value="Rusia" id="RU">Rusia</option>
      <option value="Samoa" id="WS">Samoa</option>
      <option value="Samoa occidental" id="AS">Samoa occidental</option>
      <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
      <option value="San Marino" id="SM">San Marino</option>
      <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
      <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
      <option value="Santa Helena" id="SH">Santa Helena</option>
      <option value="Santa Lucía" id="LC">Santa Lucía</option>
      <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
      <option value="Senegal" id="SN">Senegal</option>
      <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
      <option value="Sychelles" id="SC">Seychelles</option>
      <option value="Sierra Leona" id="SL">Sierra Leona</option>
      <option value="Singapur" id="SG">Singapur</option>
      <option value="Siria" id="SY">Siria</option>
      <option value="Somalia" id="SO">Somalia</option>
      <option value="Sri Lanka" id="LK">Sri Lanka</option>
      <option value="Suazilandia" id="SZ">Suazilandia</option>
      <option value="Sudán" id="SD">Sudán</option>
      <option value="Suecia" id="SE">Suecia</option>
      <option value="Suiza" id="CH">Suiza</option>
      <option value="Surinam" id="SR">Surinam</option>
      <option value="Svalbard" id="SJ">Svalbard</option>
      <option value="Tailandia" id="TH">Tailandia</option>
      <option value="Taiwán" id="TW">Taiwán</option>
      <option value="Tanzania" id="TZ">Tanzania</option>
      <option value="Tayikistán" id="TJ">Tayikistán</option>
      <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
      <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
      <option value="Timor Oriental" id="TP">Timor Oriental</option>
      <option value="Togo" id="TG">Togo</option>
      <option value="Tonga" id="TO">Tonga</option>
      <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
      <option value="Túnez" id="TN">Túnez</option>
      <option value="Turkmenistán" id="TM">Turkmenistán</option>
      <option value="Turquía" id="TR">Turquía</option>
      <option value="Tuvalu" id="TV">Tuvalu</option>
      <option value="Ucrania" id="UA">Ucrania</option>
      <option value="Uganda" id="UG">Uganda</option>
      <option value="Uruguay" id="UY">Uruguay</option>
      <option value="Uzbekistán" id="UZ">Uzbekistán</option>
      <option value="Vanuatu" id="VU">Vanuatu</option>
      <option value="Venezuela" id="VE">Venezuela</option>
      <option value="Vietnam" id="VN">Vietnam</option>
      <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
      <option value="Yemen" id="YE">Yemen</option>
      <option value="Zambia" id="ZM">Zambia</option>
      <option value="Zimbabue" id="ZW">Zimbabue</option>
    </select>
  </div>
</div>



                </section>

                <div class="button-row d-flex mt-4">
                  <div class="col text-center">
                  <button class="btn btn-primary js-btn-prev btn-danger" type="button" title="Prev" id="prev" onclick="boton_anterior()">Anterior</button>
                  <button class="btn btn-primary ml-auto js-btn-next btn-danger" type="button" title="Next">Siguiente</button>
                </div>
                </div>

              </div>
            </div>

            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn" id="panel_reporte">
              <section class="col-12">
                <section class="comentarios-medico">
                  <p class="btn-comment tab-h3">Comentarios del Médico</p>
                  <textarea id="comment" name="comment" class="comment" placeholder="Escriba sus comentarios..">He utilizado una herramienta que ayuda a compartir decisiones con la paciente acerca de la participación en el tamizaje de cáncer de mama. Hemos discutido las ventajas y desventajas del mismo y lo que la paciente valora como más importante para ella. Después de considerar las circunstancias únicas de la paciente y los pros y los contras de las alternativas, hemos decidido ...</textarea>
                </section>

                <input id="form_html" name="form_html" type="hidden">

                <section class="section">
                  <input name="enviar" type="submit" value='Generar Reporte' id="enviar" class="boton-reporte">
                </section>
              </section>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js'></script>
<script  src="./js/script.js"></script>


<script type="text/javascript">
    function myFunction() {
    //  var  z = document.forms[0];
      var  z = document.getElementById("divform");
      var  y = z.innerHTML;
      var c = document.getElementById('comment').value;
      //console.log(c)
// ---------
      document.getElementById("form_html").value=y;
// ---------
    }
</script>

<script type="text/javascript">
    function validatorJS(){
      var edad = document.getElementById("edad").value;
      var medico = document.getElementById("medico").value;
      var ambito = document.getElementById("ambito").value;
      var pais = document.getElementById("pais").value;
      var valoresNull = 0;
          if (edad == "null") {
            document.getElementById("edad").style.border = "1px solid red";
            valoresNull = valoresNull + 1;
          } else {
            document.getElementById("edad").style.border = "1px solid green"
          }
          if (medico == "null") {
            document.getElementById("medico").style.border = "1px solid red";
            valoresNull = valoresNull + 1;
          } else {
            document.getElementById("medico").style.border = "1px solid green"
          }
          if (ambito == "null") {
            document.getElementById("ambito").style.border = "1px solid red";
            valoresNull = valoresNull + 1;
          } else {
            document.getElementById("ambito").style.border = "1px solid green"
          }
          if (pais == "null") {
            document.getElementById("pais").style.border = "1px solid red";
            valoresNull = valoresNull + 1;
          } else {
            document.getElementById("pais").style.border = "1px solid green"
          }
          if (valoresNull == 0) {
            return true;
          }else {
             var drag = document.getElementById('panel_drag');
             if (drag.classList.contains("js-active")){
                return true;
              }else {
                return false;
                  }
                  // var datap = document.getElementById('panel_datos');
                  // var prev = document.getElementById('barra_datos');
                  //
                  // if (datap.classList.contains("js-active") || datap.classList.contains("js-btn-prev")){
                  //   return false;
                  // }else {
                  //   return true;
                  // }

                  //   var datap = document.getElementById('panel_datos');
                  // var drag = document.getElementById('panel_drag');
                  //
                  // if (drag.classList.contains("js-active")){
                  //   return true;
                  // }else {
                  //   return false;
                  // }
    }
  }

function boton_anterior(){

    var dragp = document.getElementById('panel_drag');
    var dragb = document.getElementById('barra_drag');
    var datosp = document.getElementById('panel_datos');
    var datosb = document.getElementById('barra_datos');

    var btn = document.getElementById("prev");
    btn.addEventListener("click", function(){

      dragp.className += " js-active";
      dragb.className += " js-active";
      datosp.classList.remove("js-active");
      datosb.classList.remove("js-active");

    });
}

</script>


<script type="text/javascript">
//DOM elements
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};
//remove class from a set of items
const removeClasses = (elemSet, className) => {
      elemSet.forEach(elem => {
        elem.classList.remove(className);
      });
};
//return exect parent node of the element
const findParent = (elem, parentClass) => {
      let currentNode = elem;
      while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
      }
      return currentNode;
};
//get active button step number
const getActiveStep = elem => {
      return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {
  //remove active state from all the state
      removeClasses(DOMstrings.stepsBtns, 'js-active');
      //set picked items to active
      DOMstrings.stepsBtns.forEach((elem, index) => {
          if (index <= activeStepNum) {
            elem.classList.add('js-active');
          }
      });
};
//get active panel
const getActivePanel = () => {
      let activePanel;
      DOMstrings.stepFormPanels.forEach(elem => {
          if (elem.classList.contains('js-active')) {
            activePanel = elem;
          }
      });
      return activePanel;
};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {
    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');
    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {
          elem.classList.add('js-active');
          setFormHeight(elem);
      }
    });
};
//set form height equal to current panel height
const formHeight = activePanel => {
    const activePanelHeight = activePanel.offsetHeight;
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};
const setFormHeight = () => {
    const activePanel = getActivePanel();
    formHeight(activePanel);
};
//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {
      //check if click target is a step button
      const eventTarget = e.target;

    //verificar true el validator js para avanzar.
      if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
      }
      //get active button step number
      const activeStep = getActiveStep(eventTarget);
      //set all steps before clicked (and clicked too) to active
      setActiveStep(activeStep);
      //open active panel
      setActivePanel(activeStep);

});
//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {
  //verificar true el validator js para avanzar.
  if (validatorJS()) {
      const eventTarget = e.target;
      //check if we clicked on `PREV` or NEXT` buttons
          if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
          {
            return;
          }
      //find active panel
      const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
      let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
      //set active step and active panel onclick
      if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;
      } else {
        activePanelNum++;
      }
      setActiveStep(activePanelNum);
      setActivePanel(activePanelNum);
 } //cierre del if primero del validatoe js
});
//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);
//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);
</script>
