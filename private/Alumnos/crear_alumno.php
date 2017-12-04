
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}

if (is_post_request()) {
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $permisos = $_POST['permisos'];
  $result=insert_alumno($nombre, $telefono, $email, $pass, $permisos);
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
