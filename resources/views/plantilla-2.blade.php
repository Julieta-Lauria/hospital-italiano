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
                                <!-- <a href="#tab7-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											            	TRH - Riegos y beneficios
											          </a> -->
                                <a href="#tab5-panel" class="mdl-tabs__tab">
                                  <span class="hollow-circle"></span>
                                  Lo más importante para vos
                                </a>
                                <a href="#tab8-panel" class="mdl-tabs__tab">
											      	      <span class="hollow-circle"></span>
											            	Fuente
											          </a>
											     </div>
											   </div>
											   <div class="mdl-cell mdl-cell--10-col">
												      <div class="mdl-tabs__panel is-active" id="tab1-panel">
                                <section>
                                  <h3 class="tab-h3">Se puede elegir</h3>
                                  <p>Frecuentemente las mujeres nos enfrentamos con la decisión de optar por un estudio para detectar precozmente el cáncer de mama:<strong> la mamografía.</strong> Puede ser porque:</p>
                                    <div class="tab1">
                                      <div class="tab1-cuadro"><img src="img/doctor.png" alt=""><p>Nos lo recomienda un profesional de la salud</p></div>
                                      <div class="tab1-cuadro"><img src="img/advertising.png" alt=""><p>Lo vimos en una publicidad</p></div>
                                      <div class="tab1-cuadro"><img src="img/chat.png" alt=""><p>Nos lo contó un/a amigo/a o familiar</p></div>
                                      <div class="tab1-cuadro"><img src="img/work.png" alt=""><p>Lo tenemos incorporado como un chequeo de “rutina” y lo hacemos por costumbre</p></div>
                                    </div>
                                    <p class="tab1-p">Como toda decisión médica, tiene opciones, con sus ventajas y desventajas, y es importante que los conozcas para que puedas decidir cuál es la mejor opción para vos. <strong>Tanto realizar como no realizar un estudio de detección precoz del cáncer de mama son opciones razonables.</strong></p>
                                  <div class="alert-container">
                                    <div class="alert alert-primary">
                                      <p><strong>Atención: </strong>Si pensás que hablar de los riesgos o desventajas de una intervención te puede generar ansiedad (por ejemplo leer el prospecto de los medicamentos) te recomendamos que no utilices esta herramienta.</p>
                                    </div>
                                  </div>
                                </section>
												      </div>
												      <div class="mdl-tabs__panel" id="tab2-panel">
                                <section>
                                  <h3 class="tab-h3">¿Qué es el cáncer de mama?</h3>
                                  <p>Es una enfermedad causada por el crecimiento anormal de células de la mama que forman un tumor maligno. Las posibilidades de que aparezca aumentan con la edad, principalmente a partir de los 50 años.</p>
                                  <p class="strong"><strong>¿Se puede prevenir?</strong></p>
                                  <p>Hay factores que aumentan el riesgo de tener cáncer de mama que se pueden modificar:</p>
                                  <div class="tab2">
                                    <div class="tab2-fila1">
                                      <div class="tab2-cuadro claro"><p>Sobrepeso</p><img src="img/obesity.png" alt=""></div>
                                      <div class="tab2-cuadro oscuro"><img src="img/cigarette.png" alt=""><p>Tabaquismo</p></div>
                                    </div>
                                      <div class="tab2-fila2">
                                        <div class="tab2-cuadro claro"><p>Sedentarismo</p><img src="img/watching-tv.png" alt=""></div>
                                        <div class="tab2-cuadro oscuro"><img src="img/wine-bottle.png" alt=""><p>Consumo excesivo de alcohol </p></div>
                                      </div>

                                  </div>
                                  <p class="strong"><strong>¿Qué es y por qué se ofrece el “chequeo” o tamizaje del cáncer de mama?</strong></p>
                                  <p>El tamizaje consiste en examinar sistemáticamente a un grupo de <strong>personas que no tienen síntomas* </strong>con el fin de detectar precozmente una enfermedad y mejorar los resultados en salud. </p>
                                  <div class="alert-container">
                                    <div class="alert alert-primary">
                                      <p><strong>* </strong>Si notás un cambio en tus mamas debés consultar al médico sin demora (un bulto palpable, cambios en la textura o enrojecimiento de la piel de las mamas o el pezón, secreción o
                                      sangrado por el pezón).
                                    </div></p>
                                  </div>
                                </section>
      												</div>
      												<div class="mdl-tabs__panel" id="tab3-panel">
                                <h3 class="tab-h3">Mamografía</h3>
                                <section>
                                  <div class="tab3">
                                    <p>El <strong>único</strong> método recomendado y que demostró ser efectivo para la detección precoz del cáncer de mama es la <strong>mamografía.</strong>
                                    Durante la prueba la mama se comprime entre dos placas planas y se saca una radiografía. Algunas mujeres experimentan molestia o dolor según la sensibilidad de sus mamas.
                                    </p>
                                  </div>
                                  <div class="beneficios-riesgos">
                                    <div class="beneficios">
                                      <h2>Posibles ventajas</h2>
                                      <div class="beneficio">
                                        <p class="benef"><i class="fas fa-thumbs-up"></i>Sensación de seguridad</p>
                                        <p class="descripcion">Algunas mujeres sienten tranquilidad y satisfacción al recibir una mamografía con un resultado normal.</p>
                                      </div>
                                      <div class="beneficio" id="benef-2">
                                          <p class="benef"><i class="fas fa-thumbs-up"></i>Reduce las muertes por cáncer de mama </p>
                                        <p class="descripcion">Este es el objetivo del tamizaje con mamografía al detectar y tratar lesiones de forma temprana, aunque no evita el cáncer de mama.</p>
                                      </div>
                                      <div class="beneficio" id="benef-3">
                                        <p class="benef"><i class="fas fa-thumbs-up"></i>Acceder a tratamientos menos invasivos</p>
                                        <p class="descripcion">Al detectar el cáncer de mama en estadíos tempranos se puede tratar con cirugías más simples o conservadoras y requerir menos quimioterapia.</p>
                                      </div>
                                    </div>
                                    <div class="riesgos">
                                      <h2>Posibles desventajas</h2>
                                      <div class="riesgo">
                                        <p class="risk"><i class="fas fa-thumbs-down"></i>No detecta todos los cánceres</p>
                                        <p class="descripcion">Algunos tumores crecen muy rápido y pueden aparecer inclusive al hacerse controles regulares y tener mamografías previas normales.</p>
                                      </div>
                                      <div class="riesgo">
                                        <a class="display-3" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">falsas alarmas</strong></span></p></i><span class="">Cuando la mamografía muestra una anomalía que podría ser cáncer, hay que hacer otros estudios para aclarar. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la anomalía era benigna, decimos que fue una falsa alarma.</span></a>
                                        <p class="descripcion">Algunas mujeres deberán repetir estudios por lesiones benignas que no quedan claras. Estos pueden demorar semanas y algunas mujeres experimentan angustia, ansiedad o temor.</p>
                                      </div>
                                      <div class="riesgo">
                                        <a class="display-4" href="#"><p class="risk"><i class="fas fa-thumbs-down"></i>Genera <strong class="underline">tratamientos innecesarios</strong></span></p></i><span class="">Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</span></a>
                                        <p class="descripcion">El tamizaje encuentra algunos cánceres de mama que no hubieran producido síntomas o daño durante tu vida. Esto conlleva cirugías, radioterapia y quimioterapia innecesarias. Es lo que llamamos “sobrediagnóstico” y “sobretratamiento".</p>
                                      </div>
                                    </div>
                                  </div>
                                </section>
												      </div>
                              <div class="mdl-tabs__panel" id="tab4-panel">
                                <section>
                                  Les falta definir que va a ir aca
                                </section>
												      </div>
                              <div class="mdl-tabs__panel" id="tab9-panel">
                                <section>
                                  @yield("diagram")
                                </section>
												      </div>
                              <div class="mdl-tabs__panel" id="tab5-panel">
                                <section>
                                  @yield("drag")
                                </section>
												      </div>
                              <div class="mdl-tabs__panel" id="tab6-panel">
                                <section>
                                  <h3 class="tab-h3">Glosario</h3>
                                  <p><strong>Falsas alarmas:</strong></p>
                                  <p>Cuando la mamografía muestra una anomalía que podría ser cáncer, hay que hacer otros estudios para aclarar. Estos estudios pueden ser desde una ecografía, otra mamografía con una técnica distinta, y hasta una biopsia (tomar una muestra del tejido de la mama). Si se demuestra que la anomalía era benigna, decimos que fue una falsa alarma.</p>
                                  <p><strong>Un diagnóstico de cáncer que no daña o “tumores inofensivos” (también llamado “sobrediagnóstico”):</strong></p>
                                  <p>Algunos tipos de cánceres de mama que se detectan por el tamizaje crecen tan lento que nunca llegarían a ser un problema de salud. Algunos inclusive desaparecen solos sin tratamiento. Hasta el momento no tenemos forma de diferenciar estos tipos de cánceres de los que realmente dañan a la mujer, por los que se ofrece tratamiento a todos los diagnósticos de cáncer de mama. Esto quiere decir que algunas mujeres con un cáncer de mama detectado por el tamizaje pueden recibir tratamientos innecesarios. Esto se conoce como sobrediagnóstico y sobretratamiento.</p>
                                </section>
												      </div>
                              <!-- <div class="mdl-tabs__panel" id="tab7-panel">
                                <section>
                                  @yield("grafico-2")
                                </section> -->
                                <div class="mdl-tabs__panel" id="tab8-panel">
                                  <section>
                                    <h3 class="tab-h3">Fuente</h3>
                                    <p><strong>Links:</strong></p>
                                    <p><a href="http://www.msal.gob.ar/images/stories/bes/graficos/0000001138cnt-20180321-efectividad-tamizaje-mamografico-mortalidaden-cm.pdf">Efectividad del tamizaje mamográfico en la reducción de la mortalidad por cáncer de mama</a></p>
                                    <p><a href="https://www.harding-center.mpg.de/en/fact-boxes/early-detection-of-cancer/breast-cancer-early-detection">Early detection of breast cancer by mammography screening</a></p>
                                  </section>
  												      </div>
												      </div>

											    </div>
										  </div>
									</div>
<!-- partial -->
  <script src='https://storage.googleapis.com/code.getmdl.io/1.1.0/material.min.js'></script>
@endsection
