<?php  require_once('initialize.php');

if (is_post_request()) {
  $error=''; // Variable To Store Error Message
  if (empty($_POST['email']) || empty($_POST['pass'])) {
    echo $error = "Usuario o Contraseña invalida";
  }
  else
  {
    // Define $username and $password
    $login['email']=$_POST['email'];
    $login['pass']=$_POST['pass'];
    // To protect MySQL injection for Security purpose
    $usuario = login ($login);
          if (isset($usuario)) {
          redirect_to(url_for('/private/index.php'));

        }
        else {
          redirect_to(url_for('/private/ingresar.php'));
        }
  }
}
?>
