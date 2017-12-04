<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));} ?>
<?php if (!isset($page_title)) {$page_title = 'Web';} ?>
<?php if (!isset($page_subtitle)) {$page_subtitle = 'Info Gral';} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Examin.Ar - <?php echo $page_title;  ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo url_for('private/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo url_for('private/css/modern-business.css'); ?>" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
      <script>
  		$(document).ready(function(){
  			$('#mitabla').DataTable({
  				"order":[[0,"des"]],
  				"language":{
  					"sProcessing":     "Procesando...",
  					"sLengthMenu":     "Mostrar _MENU_ registros",
  					"sZeroRecords":    "No se encontraron resultados",
  					"sEmptyTable":     "Ningún dato disponible en esta tabla",
  					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
  					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
  					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
  					"sInfoPostFix":    "",
  					"sSearch":         "Buscar:",
  					"sUrl":            "",
  					"sInfoThousands":  ",",
  					"sLoadingRecords": "Cargando...",
  					"oPaginate": {
  						"sFirst":    "Primero",
  						"sLast":     "Último",
  						"sNext":     "Siguiente",
  						"sPrevious": "Anterior"
  					},
  					"oAria": {
  						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
  						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
  					}
  				}
  			});
  		});
      </script>
    <!-- Custom Fonts -->
    <link href="<?php echo url_for('private/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url_for('private/img/favicon-32x32.png'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
