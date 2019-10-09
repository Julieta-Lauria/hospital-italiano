<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lo más importante para vos</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/print.min.css">
<?php $options_columns = ['Afirmaciones', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>
<script type="text/javascript">

    function myFunction() {
    //  var  z = document.forms[0];
      var  z = document.getElementById("divform");
      var  y = z.innerHTML;
        //console.log(y)


// ---------
      document.getElementById("form_html").value=y;

// ---------


    }


</script>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="section">
	<h1>Lo más importante para vos</h1>
  <h2>¿Con cuál de estas afirmaciones te sentirías más identificada? </h2>
</section>

<form class="" action="{{url('pdf')}}" id="printJS-form" method="post" onsubmit="myFunction()">
@csrf
<div class="drag-container" id="divform">
	<ul class="drag-list">


    <li class="drag-column drag-column-on-hold">
      <span class="drag-column-header">
				<h2>Afirmaciones</h2>
			</span>
			<div class="drag-options" id="options1"></div>
      <ul class="drag-inner-list <?php echo $options_columns[0]; ?>" id="1">
        <li class="drag-item">Item 1</li>
        <li class="drag-item">Item 2</li>
        <li class="drag-item">Item 3</li>
        <li class="drag-item">Item 4</li>
        <li class="drag-item">Item 5</li>
        <li class="drag-item">Item 6</li>
        <li class="drag-item">Item 7 </li>
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

<input id="form_html" name="form_html" type="hidden">

<section class="section">
  <input name="enviar" type="submit" value='Generar Reporte' id="enviar">
</section>


</form>







<!-- partial -->
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js'></script>
<script  src="./js/script.js"></script>
<script src="./js/print.min.js"></script>

<button type="button" onclick="printJS({ printable: 'printJS-form', type: 'html', header: 'PrintJS - Perros' })">
   Print Form with Header
</button>

</body>
</html>
