@extends("plantilla-1")

@section("titulo")
  Contenido
@endsection

@section("principal")


<div class="mdl-tabs vertical-mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
										  <div class="mdl-grid mdl-grid--no-spacing">
										    <div class="mdl-cell mdl-cell--2-col">
											      <div class="mdl-tabs__tab-bar">
											         <a href="#tab1-panel" class="mdl-tabs__tab is-active">
											      	     <span class="hollow-circle"></span>
											      	      Se puede elegir
											         </a>
											         <a href="#tab2-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											      	      ¿Qué es el cáncer de mama?
											          </a>
											          <a href="#tab3-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											            	Mamografía
											          </a>
                                <a href="#tab4-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
                                    Mujeres de 40 a 49 años
											          </a>
                                <a href="#tab9-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
                                    Mujeres de 50 a 69 años
											          </a>
                                <a href="#tab6-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											            	Glosario
											          </a>
                                <a href="#tab7-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
                                    Prevenir el cáncer de mama
											          </a>
                                <a href="#tab5-panel" class="mdl-tabs__tab">
                                  <span class="hollow-circle"></span>
                                  Lo más importante para vos
                                </a>
                                <a href="#tab8-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											            	Referencias
											          </a>
											     </div>
											   </div>
											   <div class="mdl-cell mdl-cell--10-col parent">
                             <div class="mdl-tabs__panel is-active" id="tab1-panel">
                               <section>
                                   <!-- <div class="mySlides1">
                                     <section>
                                       @yield("atencion")
                                     </section>
                                   </div>
                                   <div class="mySlides1">
                                     <section> -->
                                       @yield("elegir")
                                     <!-- </section>
                                   </div> -->
                                </section>
                                 </div>
												      <div class="mdl-tabs__panel scroller" id="tab2-panel">
                                <section class="child-tab2">
                                      @yield("cancerdemama")
                                </section>
      												</div>
      												<div class="mdl-tabs__panel scroller" id="tab3-panel">
                                <section class="child-tab3">
                                  @yield("mamografia")
                                </section>
												      </div>
                              <div class="mdl-tabs__panel scroller" id="tab4-panel">
                                <section class="child-tab4">
                                  @yield("40a49")
                                </section>
												      </div>
                              <div class="mdl-tabs__panel scroller" id="tab9-panel">
                                <section class="child-tab5">
                                  @yield("50a69")
                                </section>
												      </div>

                              <div class="mdl-tabs__panel scroller" id="tab5-panel">
                                <div class="content child-tab6">
                                  @include("tab5")
                                </div>
												      </div>
                              <div class="mdl-tabs__panel" id="tab6-panel">
                                <section>
                                  @yield("glosario")
                                </section>
												      </div>
                              <div class="mdl-tabs__panel" id="tab7-panel">
                                <section>
                                  @yield("prevenir")
                                </section>
                                </div>
                                <div class="mdl-tabs__panel" id="tab8-panel">
                                  <section>
                                    @yield("referencias")
                                  </section>
  												      </div>
                                </div>
											    </div>
										  </div>
									</div>
<!-- partial -->
  <script src='https://storage.googleapis.com/code.getmdl.io/1.1.0/material.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script><script  src="./script.js"></script>

  </body>

  <!-- JAVASCRIPT DEL BOTON DE INGRESAR DEL CARTEL DE ATENCION -->
  <script type="text/javascript">
  var slideIndex1 = 1;
  showDivs1(slideIndex1);

  function plusDivs1(n) {
  showDivs1(slideIndex1 += n);
  }

  function showDivs1(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  if (n > x.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex1-1].style.display = "block";
  }
  </script>


<!-- JAVASCRIPT DEL MULTISTEP FORM DE LA TAB DEL DRAG -->

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

@endsection
