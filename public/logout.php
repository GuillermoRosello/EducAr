<?php
	require '../private/Functions/initialize.php';
	session_start();
	session_destroy();
	session_unset();
	header('location: ingresar.php');

?>
