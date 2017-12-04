
<?php  require_once('/../Functions/initialize.php');;
if (is_post_request()) {
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $result=insert_examen($nombre, $telefono, $email, $pass);
      if ($result) {
    redirect_to(url_for('/private/examenes.php'));
  }
  else {
    echo "Error";
  }
}
else {
  redirect_to(url_for('/private/examenes.php'));
}
?>
