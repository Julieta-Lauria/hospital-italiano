<!--content inner-->
<div class="content__inner">
  <div class="container overflow-hidden">
    <!--multisteps-form-->
    <div class="multisteps-form">
      <!--progress bar-->
      <div class="row">
        <div class="col-12 col-lg-11 ml-auto mr-auto mb-4">
          <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Datos</button>
            <button class="multisteps-form__progress-btn" type="button" title="Address">Decisiones</button>
            <!-- <button class="multisteps-form__progress-btn" type="button" title="Order Info">Comentarios</button> -->
            <button class="multisteps-form__progress-btn" type="button" title="Comments">Comentarios</button>
          </div>
        </div>
      </div>
      <!--form panels-->
      <div class="row">
        <div class="col-12 col-lg-11 m-auto">
          <form class="multisteps-form__form">
            <!--single form panel-->
            <section class="col-12">
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title tab-h3">Completá los siguientes datos:</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <select class="multisteps-form__input form-control" name="">
                        <option value="">Edad de la paciente</option>
                        <option value="">41</option>
                        <option value="">42</option>
                        <option value="">43</option>
                        <option value="">44</option>
                        <option value="">45</option>
                        <option value="">46</option>
                        <option value="">47</option>
                        <option value="">48</option>
                        <option value="">49</option>
                        <option value="">50</option>
                        <option value="">51</option>
                        <option value="">52</option>
                        <option value="">53</option>
                        <option value="">54</option>
                        <option value="">55</option>
                        <option value="">56</option>
                        <option value="">57</option>
                        <option value="">58</option>
                        <option value="">59</option>
                        <option value="">60</option>
                        <option value="">61</option>
                        <option value="">62</option>
                        <option value="">63</option>
                        <option value="">64</option>
                        <option value="">65</option>
                        <option value="">66</option>
                        <option value="">67</option>
                        <option value="">68</option>
                        <option value="">69</option>
                        <option value="">69</option>
                        <option value="">70</option>
                        <option value="">71</option>
                        <option value="">72</option>
                        <option value="">73</option>
                        <option value="">74</option>
                        <option value="">75</option>
                      </select>
                      <!-- <input class="multisteps-form__input form-control" type="text" placeholder="First Name"/> -->
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <select class="multisteps-form__input form-control" name="">
                        <option value="">Profesional de la salud</option>
                        <optgroup label="Médico/a">
                          <option value="">Médico/a de familia/general</option>
                          <option value="">Ginecólogo/a</option>
                          <option value="">Médico/a clínico/a</option>
                          <option value="">Otro/a médico/a</option>
                        </optgroup>
                        <option value="">Enfermero/a</option>
                        <option value="">Otro/a</option>
                      </select>
                      <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Last Name"/> -->
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <select class="multisteps-form__input form-control" name="">
                        <option value="">Lugar de atención</option>
                        <option value="">Privado</option>
                        <option value="">Público</option>
                      </select>
                      <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Login"/> -->
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <select class="multisteps-form__input form-control" name="">
                        <option value="">País</option>
                        <option value="">Argentina</option>
                        <option value="">otros</option>
                      </select>
                      <!-- <input class="multisteps-form__input form-control" type="email" placeholder="Email"/> -->
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <div class="col text-center">
                    <button class="btn btn-primary ml-auto js-btn-next btn-danger" type="button" title="Next">Siguiente</button>
                  </div>
                  </div>
                </div>
              </div>

            </section>
            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title"></h3>
              <div class="multisteps-form__content">
                <section class="col-12">
                  <!-- partial:index.partial.html -->
                  <section class="section drag-title">
                    <h2 class="drag-h2">Lo más importante para vos: ¿Con cuál de estas afirmaciones te sentirías más identificada? </h2>
                    <p>Ordene las siguientes frases si está de acuerdo, en desacuerdo o ni de acuerdo o desacuerdo con estas afirmaciones.
                </p>
                  </section>
<?php $options_columns = ['Afirmaciones', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>
                  <form class="" action="{{url('pdf')}}" id="" method="post" onsubmit="myFunction()">
                  @csrf
                  <div class="drag-container" id="divform">
                    <ul class="drag-list">


                      <li class="drag-column drag-column-on-hold">
                        <span class="drag-column-header">
                          <h2 class="afirmaciones">Afirmaciones</h2>
                        </span>
                        <div class="drag-options" id="options1"></div>
                        <ul class="drag-inner-list <?php echo $options_columns[0]; ?>" id="1">
                          <li class="drag-item">Estoy dispuesta a hacer todo lo que pueda para detectar un cáncer de mama a tiempo</li>
                          <li class="drag-item">No me gusta hacerme estudios ni venir al médico si estoy sana o no tengo síntomas</li>
                          <li class="drag-item">La mamografía es muy molesta y la paso mal haciéndome el estudio</li>
                          <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece BAJA</li>
                          <li class="drag-item">La cantidad de muertes que se podrían evitar con la mamografía me parece ALTA</li>
                          <li class="drag-item">Me genera ansiedad o miedo esperar el resultado de la mamografía</li>
                          <li class="drag-item">Me genera ansiedad o miedo repetirme estudios</li>
                          <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece BAJA</li>
                          <li class="drag-item">La cantidad de tratamientos innecesarios que se podrían generar con la mamografía me parece ALTA</li>
                          <li class="drag-item">Prefiero que esta decisión la tome mi médico/a</li>
                        </ul>
                      </li>


                      <li class="drag-column drag-column-in-progress">
                        <span class="drag-column-header">
                          <h2>Nada identificada</h2>
                        </span>
                        <div class="drag-options" id="options2"></div>
                        <ul class="drag-inner-list <?php echo $options_columns[1]; ?>" id="2">
                          <!-- <li class="drag-item"></li> -->
                        </ul>
                      </li>


                      <li class="drag-column drag-column-needs-review">
                        <span class="drag-column-header">
                          <h2>Un poco identificada</h2>
                        </span>
                        <div class="drag-options" id="options3"></div>
                        <ul class="drag-inner-list <?php echo $options_columns[2]; ?>" id="3">
                          <!-- <li class="drag-item"></li> -->
                        </ul>
                      </li>


                      <li class="drag-column drag-column-approved">
                        <span class="drag-column-header">
                          <h2>Muy identificada</h2>
                        </span>
                        <div class="drag-options" id="options4"></div>
                        <ul class="drag-inner-list <?php echo $options_columns[3]; ?>" id="4">
                          <!-- <li class="drag-item"></li> -->
                        </ul>
                      </li>
                    </ul>


                  </div>
                  <!-- <section class="comentarios-medico">
                    <p class="btn-comment">Comentarios del Médico</p>
                    <textarea id="comment" name="comment" class="comment" placeholder="Escriba sus comentarios.."></textarea>
                  </section>

                  <input id="form_html" name="form_html" type="hidden">


                  <section class="section">
                    <input name="enviar" type="submit" value='Generar Reporte' id="enviar" class="boton-reporte">
                  </section> -->



                  </form>
                </section>
                <div class="button-row d-flex mt-4">
                  <div class="col text-center">
                  <button class="btn btn-primary js-btn-prev btn-danger" type="button" title="Prev">Anterior</button>
                  <button class="btn btn-primary ml-auto js-btn-next btn-danger" type="button" title="Next">Siguiente</button>
                </div>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
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
              <!-- <h3 class="multisteps-form__title">Comentarios del medico</h3>
              <div class="multisteps-form__content">
                <div class="form-row mt-4">
                  <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                  <button class="btn btn-success ml-auto" type="button" title="Send">Generar reporte</button>
                </div>
              </div> -->
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
  stepNextBtnClass: 'js-btn-next' };


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

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

</script>
