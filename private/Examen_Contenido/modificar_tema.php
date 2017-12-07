<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
if (is_post_request()) {
  $mat_id['mat_id'] = $_POST['mat_id'];
  $tema_nombre['tema_nombre'] = $_POST['tema_nombre'];
  $tema_id['tema_id'] = $_POST['tema_id'];
  $result=edit_tema($mat_id,$tema_nombre,$tema_id);
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
