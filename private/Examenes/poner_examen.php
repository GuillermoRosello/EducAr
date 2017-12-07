<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
	$alumno['alumno_id'] = $_POST['alumno_id'];
	$alumno['nombre'] = $_POST['nombre'];
	$tema['tema_id'] = $_POST['tema_id'];
	$tema['tema_nombre'] = $_POST['tema_nombre'];
	$tema['mat_id'] = $_POST['mat_id'];
  	$result=asignar_tema($alumno, $tema);
      if ($result) {
    redirect_to(url_for('/private/Examen_Contenido/temas.php'));
  }
  else {
    echo "Error";
  }
}
else {
  redirect_to(url_for('/private/Examen_Contenido/temas.php'));
}
?>