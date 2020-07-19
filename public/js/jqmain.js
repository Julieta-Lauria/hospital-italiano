


$(document).ready(function(){

  // //SLIDER
  // if(window.location.href.indexOf('index') > -1){
  //   $('.galeria').bxSlider({
  //     mode: 'fade',
  //     captions: true,
  //     slideWidth: 1200,
  //     responsive: true
  //   });
  // }
	//
  // //BOTON SUBIR
  // $('.subir').click(function(e){
  //   e.preventDefault();
	//
  //   $('html,body').animate({
  //     scrollTop: 0
  //   }, 500);
  //   return false;
  // });
	//
  // //FORMULARIO DE LOGIN
  // $('#login form').submit(function(){
  //   var form_name = $('#form_name').val();
  //   localStorage.setItem('form_name', form_name);
  // });
	//
  // var form_name = localStorage.getItem('form_name');
	//
  // if(form_name != null && form_name != 'undefined'){
  //   var about_parrafo = $('#about p');
  //   about_parrafo.html('<br><strong> Buenvenido ' + form_name + '</strong>');
  //   about_parrafo.append('<a href="#" id="logout">Cerrar Sesion</a>');
	//
  //   $('#login').hide();
  //   $('#logout').click(function(){
  //     localStorage.clear();
  //     location.reload();
  //   });
  // }



	$('#btn-send-mail').hide();
	$('#send-mail').hide();

	////Prueba con dos botones

	$('#form-mail').click(function(){
	  $(this).hide();
	  $('#btn-send-mail').show();

	 $('#send-mail').fadeIn('fast');
	})











		/// EFECTOS
		// mostrar y ocultar


		/// fast / normal --> velocidad de transicion
		//fundido: fadeIn  // fadeOut
		// fadeTo OPACIDAD (ocultar=0  mostrar=1 )

		var cajuela = $('#caja');
		cajuela.hide();

		////Prueba con dos botones
		// $('#ocultar').hide();
		// $('#mostar').click(function(){
		//   $(this).hide();
		//   $('#ocultar').show();
		//   cajuela.fadeIn('fast');
		// })
		// $('#ocultar').click(function(){
		//   $(this).hide();
		//   $('#mostar').show();
		//   cajuela.fadeTo('slow',0.2);
		// })


		////Prueba con un solo boton toggle
		// toggle()
		// fadeToggle   -- con efecto fade
		// slideToggle
		// slideDown(ocultar)     slideUp (mostrar)

		// $('#todoenuno').click(function(){
		//     cajuela.slideToggle('fast');
		// })


		//SE PUEDE AÑADIR COMO SEGUNDO PARAMETRO UN CALLBACK


		$('#todoenuno').click(function(){
		    cajuela.slideToggle('fast', function(){
		      console.log('cartel oculto');
		    });
		})




		///////////// ANIMACIONES
		// con la funcion animate()----> dentro de la funcion, con corchetes se le indica
		//               en formato JSON
		$('#animame').click(function(){
		    cajuela.animate({
		      marginLeft:'500px',
		      fontSize: '25px'
		    }, 'slow')
		// encadeno otra animacion
		    .animate({
		      borderRadius: '20px'
		    }, 'slow')
		    ;
		})




});
