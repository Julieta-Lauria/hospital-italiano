<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lo más importante para vos</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/print.min.css">
<?php $options_columns = ['Afirmaciones', 'Nada identificada', 'Poco identificada', 'Muy identificada'] ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Reporte para entrega</title>
{!! Html::style('./css/style.css') !!}
{!! Html::style('./css/app.css') !!}

</head>
<body>

      <main>
        <div id="details" class="clearfix">
          <div id="invoice">
            <h1>Reporte {{ $invoice }}</h1>
            <div class="date">Fecha: {{ $date }}</div>
          </div>
        </div>

        <div class="">
          <h2>Grafico de ayuda:</h2>
            <div class="grafico2pdf">




            </div>
        </div>





        <div class="">
          <h2>Tabla de desiciones:</h2>
            <div class="dragpdf">
              <?php echo $_POST['form_html'];  ?>
            </div>
        </div>


</body>
</html>
