<?php 

////////////////////////////////////////consultas////////////////////////////////////////////
////login usuarios
function l_login_usuarios($usuario,$clave){
global $conexion;
$consulta = "SELECT * 
			FROM usuarios 
			WHERE usuario = '{$usuario}' 
			AND clave = '{$clave}' 
			AND activo = '1' 
			LIMIT 1";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{
		$usuario = mysql_fetch_array($resultado);
		return $usuario ;
	}
}
////login clientes
function l_login_clientes($usuario,$clave){
global $conexion;
$consulta = "SELECT * 
			FROM clientes 
			WHERE usuario = '{$usuario}' 
			AND clave = '{$clave}' 
			AND activo = '1' 
			LIMIT 1";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{
		$usuario = mysql_fetch_array($resultado);
		return $usuario ;
	}
}
////login alumnos
function l_login_alumnos($dni,$clave){
global $conexion;
$consulta = "SELECT * 
			FROM alumnos 
			WHERE dni = '{$dni}' 
			AND clave = '{$clave}' 
			AND activo = '1' 
			LIMIT 1";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{
		$usuario = mysql_fetch_array($resultado);
		return $usuario ;
	}
}
////listar examenes
function l_examenes(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM examenes 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion);
	verificar_consulta($resultado); 
	return $resultado;
}
////listar promociones
function l_promociones(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM promociones 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion);
	verificar_consulta($resultado); 
	return $resultado;
}
////listar ex_clientes segun id cliente
function l_ex_clientes($id_cliente){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM ex_clientes 
				WHERE id_cliente = '{$id_cliente}'   
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
		return $resultado ;
}
////listar ex_clientes segun id cliente
function l_ex_clientes_examen($id_cliente,$id_examen){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM ex_clientes 
				WHERE id_cliente = '{$id_cliente}' AND id_examen = '{$id_examen}'  
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
		$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar usuarios
function l_usuarios(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM usuarios 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	verificar_consulta($resultado);  //llama funcion de funtions.php
	return $resultado;
}
////listar usuarios segun id
function l_usuarios_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM usuarios 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar materias
function l_materias(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM materias 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	verificar_consulta($resultado);  //llama funcion de funtions.php
	return $resultado;
}
////listar materias segun id
function l_materias_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM materias 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar permisos segun id
function l_permiso_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM permisos 
				WHERE id = '{$id}' 
				"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar permisos
function l_permisos(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM permisos 
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	verificar_consulta($resultado);  //llama funcion de funtions.php
	return $resultado;
}
////listar examenes segun id materia
function l_examenes_id_materia($id_materia){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM examenes 
				WHERE id_materia = '{$id_materia}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
		return $resultado ;
}
////listar examenes segun id
function l_examenes_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM examenes 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar clientes
function l_clientes(){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM clientes 
				ORDER BY razonsocial"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); 
	verificar_consulta($resultado);
	return $resultado;
}
////listar clientes segun id
function l_clientes_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM clientes 
				WHERE id = '{$id}' 
				ORDER BY razonsocial"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); 
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar preguntas segun id_examen
function l_preguntas_id_examen($id_examen){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM preguntas 
				WHERE id_examen = '{$id_examen}' 
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion);
		return $resultado ;
}
////listar promociones segun id
function l_promocion_id($id){
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
////listar alumnos segun cliente
function l_alumnos($id_cliente){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM alumnos 
				WHERE id_cliente = '{$id_cliente}' 
				ORDER BY apellido"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
			return $resultado ;
}
////listar alumno segun id
function l_alumnos_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM alumnos 
				WHERE id = '{$id}' 
				ORDER BY nombre"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar pruevas segun id_alumno 
function l_pruevas_id_alumno($id_alumno){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM pruevas 
				WHERE id_alumno = '{$id_alumno}' "; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
		return $resultado ;
}
////listar pruevas segun id_alumno y id_examen
function l_pruevas_id_alumno_examen($id_alumno,$id_examen){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM pruevas 
				WHERE id_alumno = '{$id_alumno}' AND id_examen = '{$id_examen}' "; 
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
				WHERE id = '{$id}'"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////listar pruevas_resp segun id_prueva
function l_pruevas_resp_id_prueva($id_prueva){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM pruevas_resp 
				WHERE id_prueva = '{$id_prueva}'
				group by id_pregunta "; 
				//-----
    $resultado = mysql_query($consulta,$conexion);
		return $resultado ;
}
////listar preguntas segun id
function l_preguntas_id($id){
	global $conexion;
	$consulta= //-----
				"SELECT * 
				FROM preguntas 
				WHERE id = '{$id}' 
				ORDER BY id"; 
				//-----
    $resultado = mysql_query($consulta,$conexion); // ejecucion de la consulta anterior
	$valor = mysql_fetch_array($resultado);
		return $valor ;
}
////////////////////////////////////////altas////////////////////////////////////////////

//////	alumnos
function a_alumnos($id_cliente, $nombre, $apellido, $dni, $email, $clave, $activo){
global $conexion;
$consulta = "INSERT INTO alumnos (
			id_cliente, nombre, apellido, dni, email, clave, activo
			) VALUES (
			'{$id_cliente}','{$nombre}','{$apellido}','{$dni}','{$email}', '{$clave}', '{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}	
//////	cliente
function a_clientes($razonsocial, $email, $telefono, $direccion, $usuario, $clave, $activo){
global $conexion;
$consulta = "INSERT INTO clientes (
			razonsocial, email, telefono, direccion, usuario, clave, activo
			) VALUES (
			'{$razonsocial}','{$email}','{$telefono}','{$direccion}','{$usuario}', '{$clave}', '{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	examenes
function a_examentes($nombre, $descripcion, $id_materia, $precio, $tiempo, $activo){
global $conexion;
$consulta = "INSERT INTO examenes (
			nombre, descripcion, id_materia, precio, tiempo, activo
			) VALUES (
			'{$nombre}','{$descripcion}','{$id_materia}','{$precio}','{$tiempo}',  '{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	examenes clientes
function a_ex_clientes($id_examen, $id_cliente){
global $conexion;
$consulta = "INSERT INTO ex_clientes (
			id_examen, id_cliente
			) VALUES (
			'{$id_examen}','{$id_cliente}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	examenes materias
function a_materias($nombre, $descripcion, $activo){
global $conexion;
$consulta = "INSERT INTO materias (
			nombre, descripcion, activo
			) VALUES (
			'{$nombre}','{$descripcion}','{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	preguntas
function a_preguntas($id_examen, $pregunta, $resp_1, $resp_2, $resp_3, $correcta){
global $conexion;
$consulta = "INSERT INTO preguntas (
			id_examen, pregunta, resp_1, resp_2, resp_3, correcta
			) VALUES (
			'{$id_examen}','{$pregunta}','{$resp_1}','{$resp_2}','{$resp_3}',  '{$correcta}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	promociones
function a_promociones($nombre, $descripcion, $id_examen, $descuento, $activo){
global $conexion;
$consulta = "INSERT INTO promociones (
			nombre, descripcion, id_examen, descuento, activo
			) VALUES (
			'{$nombre}','{$descripcion}','{$id_examen}','{$descuento}','{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	pruevas
function a_pruevas($id_cliente, $id_alumno, $id_examen, $nota, $estado, $inicio, $terminada, $tipo){
global $conexion;
$consulta = "INSERT INTO pruevas (
			id_cliente, id_alumno, id_examen, nota, estado, inicio, terminada, tipo
			) VALUES (
			'{$id_cliente}','{$id_alumno}','{$id_examen}','{$nota}','{$estado}','{$inicio}','{$terminada}','{$tipo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	pruevas respuestas
function a_pruevas_resp($id_prueva, $id_pregunta, $respuesta, $valor){
global $conexion;
$consulta = "INSERT INTO pruevas_resp (
			id_prueva, id_pregunta, respuesta, valor
			) VALUES (
			'{$id_prueva}','{$id_pregunta}','{$respuesta}','{$valor}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}
//////	usuarios
function a_usuarios($nombre, $email, $usuario, $clave, $id_permiso, $activo){
global $conexion;
$consulta = "INSERT INTO usuarios (
			nombre, email, usuario, clave, id_permiso, activo
			) VALUES (
			'{$nombre}','{$email}','{$usuario}','{$clave}','{$id_permiso}','{$activo}')";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = 1;}
	else{$mensaje = 0;
	echo $consulta."<br>".mysql_error();}
return $mensaje;
}


////////////////////////////////////////modificaciones////////////////////////////////////////////

//////// clave alumnos
function m_clave_alumnos($clave,$id){
global $conexion;
$consulta = "UPDATE alumnos SET 
							clave = '{$clave}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// clave clientes
function m_clave_clientes($clave,$id){
global $conexion;
$consulta = "UPDATE clientes SET 
							clave = '{$clave}'						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// clave usuarios
function m_clave_usuarios($clave,$id){
global $conexion;
$consulta = "UPDATE usuarios SET 
							clave = '{$clave}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// usuarios
function m_usuarios($nombre,$email,$id_permiso,$clave,$activo,$id){
global $conexion;
$consulta = "UPDATE usuarios SET 
							nombre = '{$nombre}',
							email = '{$email}',
							clave = '{$clave}',
							activo = '{$activo}',
							id_permiso = '{$id_permiso}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// materias
function m_materias($nombre,$descripcion,$activo,$id){
global $conexion;
$consulta = "UPDATE materias SET 
							nombre = '{$nombre}',
							descripcion = '{$descripcion}',
							activo = '{$activo}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// cliente
function m_clientes($razonsocial,$email,$telefono,$direccion, $clave,$activo,$id){
global $conexion;
$consulta = "UPDATE clientes SET 
							razonsocial = '{$razonsocial}',
							email = '{$email}',
							telefono = '{$telefono}',
							direccion = '{$direccion}',
							clave = '{$clave}',
							activo = '{$activo}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// examenes
function m_examenes($nombre,$descripcion,$id_materia,$precio,$tiempo,$activo,$id){
global $conexion;
$consulta = "UPDATE examenes SET 
							nombre = '{$nombre}',
							descripcion = '{$descripcion}',
							id_materia = '{$id_materia}',
							precio = '{$precio}',
							tiempo = '{$tiempo}',
							activo = '{$activo}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// preguntas
function m_preguntas($pregunta,$resp_1,$resp_2,$resp_3,$correcta,$id){
global $conexion;
$consulta = "UPDATE preguntas SET 
							pregunta = '{$pregunta}',
							resp_1 = '{$resp_1}',
							resp_2 = '{$resp_2}',
							resp_3 = '{$resp_3}',
							correcta = '{$correcta}' 						
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
//////// alumnos
function m_alumnos($nombre,$apellido,$dni,$email,$activo,$id){
global $conexion;
$consulta = "UPDATE alumnos SET 
							nombre = '{$nombre}',
							apellido = '{$apellido}',
							dni = '{$dni}',
							email = '{$email}',
							activo = '{$activo}' 						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}

//////// pruevas inicio
function m_inicio_prueva($id){
global $conexion;
$inicio=date('Y-m-d H:i:s');
$consulta = "UPDATE pruevas SET 
							inicio = '{$inicio}',
							estado = 2						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
//////// pruevas fin
function m_fin_prueva($nota,$id){
global $conexion;
$teminada=date('Y-m-d H:i:s');
$consulta = "UPDATE pruevas SET 
							terminada = '{$teminada}',
							nota = {$nota}						
							WHERE id = {$id}";
$resultado = mysql_query($consulta, $conexion);
	if(mysql_affected_rows() == 1)
		{$mensaje = "Se ha actualizado correctamente";}
	else	{$mensaje = "Se ha obtenido un error. <br>" . mysql_error();}
	return $mensaje;
}
////////////////////////////////////////otras////////////////////////////////////////////

/////Verifica si la Consulta SQL es correcta o no.
function verificar_consulta($consulta){
	if(!$consulta){
		die("no se ha podido realizar la consulta ".mysql_error());
	}
}









?>	