
<?php  require_once('/../Functions/initialize.php');;
if (is_post_request()) {
  $tema = $_POST['Tema'];
  $nombre_examen = $_POST['Nombre Examen'];
  $i=1
  while ($i <= 31) {
    $pregunta = 
    $Preguntas = $_POST['Pregunta_".$i."'];
    $Opciones = $_POST['pass'];  # code...
  }

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
