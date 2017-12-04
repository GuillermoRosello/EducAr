<?php require_once("constants.php"); ?>	
<?php 
// Conectando mysql
$conexion = mysql_connect(DB_SERVER01,DB_USERNAME01,DB_PASSWORD01); 
	if(!$conexion) {die('No se pudo conectar: ' . mysql_error());}
?>

<?php  // Conectando mysql
$conexion_bd = mysql_select_db(DB_NAME01, $conexion);
if(!$conexion_bd) {die('No se pudo conectar bd: ' . mysql_error());}
?>
