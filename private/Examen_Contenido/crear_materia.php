
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}

if (is_post_request()) {
  $mat_nombre = $_POST['mat_nombre'];
  $result=crear_materia($mat_nombre);
      if ($result) {
    redirect_to(url_for('private/Examen_Contenido/materias.php'));
  }
  else {
    echo "Error";
  }
}
else {
  redirect_to(url_for('private/Examen_Contenido/materias.php'));
}
?>
