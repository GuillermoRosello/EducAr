<?php 
session_start();
function verficar_sesion(){
	if(!isset($_SESSION["usuario_id"]))
	{
		header("Location: login.php");
		exit();
	}
}
function verficar_sesion_admin(){
	if(!isset($_SESSION["usuario_id"]))
	{
		header("Location: login.php");
		exit();
	}
}
function verficar_sesion_cliente(){
	if(!isset($_SESSION["cliente_id"]))
	{
		header("Location: ingresar.php");
		exit();
	}
}

function verficar_sesion_alumno(){
	if(!isset($_SESSION["alumno_id"]))
	{
		header("Location: ingresaralumno.php");
		exit();
	}
}

?>


