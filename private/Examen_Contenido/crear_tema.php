<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}

if (is_post_request()) {
  $tema_nombre = $_POST['tema_nombre'];
  $mat_id = $_POST['mat_id'];
  $result=crear_tema($tema_nombre,$mat_id);
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
