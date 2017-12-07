<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
	$preg['preg_nombre'] = $_POST['preg_nombre'];
	$tema_id['tema_id'] = $_POST['tema_id'];
  $result=editar_pregunta ($preg,$tema_id);
      if ($result) {
    redirect_to(url_for('/private/Alumnos/alumnos.php?page=1'));

  }
  else {
    echo "Error";
  }
}
else {
  redirect_to(url_for('/private/Alumnos/alumnos.php'));
}
?>
