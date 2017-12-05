<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));} 
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
  $alumno['id_alumnos'] = $_POST['id_alumnos'];
  $alumno['nombre'] = $_POST['nombre'];
  $alumno['telefono'] = $_POST['telefono'];
  $alumno ['email'] = $_POST['email'];
  $alumno['pass'] = $_POST['pass'];
  $result=delete_alumno($alumno['id_alumnos']);
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
