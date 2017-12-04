<?php 

////////////////////////////////////////consultas////////////////////////////////////////////














////listar preguntas
function l_preguntas(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM preguntas 
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	verificar_consulta($resultado);  //llama funcion de funtions.php
	return $resultado;
}






////listar promociones segun id
function l_promociones_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM promociones 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}

////listar pruevas segun id
function l_pruevas_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM pruevas 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}



////listar pruevas_resp segun id
function l_pruevas_resp_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM pruevas_resp 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}





////////////////////////////////////////altas////////////////////////////////////////////



////////////////////////////////////////modificaciones////////////////////////////////////////////





//////// examenes


//////// ex_clientes
function m_ex_clientes($id_examen,$id_cliente,$id){
global $conexion;
$consulta = "UPDATE ex_clientes SET 
							id_examen = '{$id_examen}',
							id_cliente = '{$id_cliente}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}





//////// promociones
function m_promociones($nombre,$descripcion,$descuento,$activo,$id){
global $conexion;
$consulta = "UPDATE promociones SET 
							nombre = '{$nombre}',
							descripcion = '{$descripcion}',
							descuento = '{$descuento}',
							activo = '{$activo}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}

//////// pruevas
function m_pruevas($nota,$estado,$inicio,$terminada,$id){
global $conexion;
$consulta = "UPDATE pruevas SET 
							nota = '{$nota}',
							estado = '{$estado}',
							inicio = '{$inicio}',
							terminada = '{$terminada}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}











?>	



