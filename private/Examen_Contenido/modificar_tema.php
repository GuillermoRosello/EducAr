<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
  $tema['tema_id'] = $_POST['tema_id'];
  $tema['tema_nombre'] = $_POST['tema_nombre'];
  $materia['mat_id'] = $_POST['mat_id'];
  $result=edit_tema($tema,$materia);
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
