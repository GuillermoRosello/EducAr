<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
  $alumno['alumno_id'] = $_POST['alumno_id'];
  $alumno['nombre'] = $_POST['nombre'];
  $alumno['telefono'] = $_POST['telefono'];
  $alumno['email'] = $_POST['email'];
  $alumno['pass'] = $_POST['pass'];
  $alumno['permisos'] = $_POST['permisos'];
  $result=edit_alumno($alumno);
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
