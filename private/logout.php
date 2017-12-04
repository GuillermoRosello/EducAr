<?php
	require 'Functions/initialize.php';
	session_start();
	$_SESSION['logueado']="SI";
	session_destroy();
	session_unset();
	header('location: ingresar.php');

?>
